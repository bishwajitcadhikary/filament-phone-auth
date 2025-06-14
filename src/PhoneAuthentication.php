<?php

declare(strict_types=1);

namespace Frolax\FilamentPhoneAuth;

use Closure;
use Exception;
use Filament\Actions\Action;
use Filament\Auth\MultiFactor\Contracts\HasBeforeChallengeHook;
use Filament\Auth\MultiFactor\Contracts\MultiFactorAuthenticationProvider;
use Filament\Facades\Filament;
use Filament\Forms\Components\OneTimeCodeInput;
use Filament\Notifications\Notification;
use Filament\Schemas\Components\Actions;
use Filament\Schemas\Components\Text;
use Frolax\FilamentPhoneAuth\Actions\DisablePhoneAuthenticationAction;
use Frolax\FilamentPhoneAuth\Actions\SetUpPhoneAuthenticationAction;
use Frolax\FilamentPhoneAuth\Contracts\HasPhoneAuthentication;
use Frolax\FilamentPhoneAuth\Exceptions\InvalidConfig;
use Frolax\FilamentPhoneAuth\Notifications\VerifyPhoneAuthentication;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Random\RandomException;

class PhoneAuthentication implements HasBeforeChallengeHook, MultiFactorAuthenticationProvider
{
    protected int $codeExpiryMinutes = 4;

    protected string $codeNotification = VerifyPhoneAuthentication::class;

    protected ?Closure $generateCodesUsing = null;

    public static function make(): static
    {
        return app(static::class);
    }

    public function getId(): string
    {
        return 'phone_code';
    }

    public function getLoginFormLabel(): string
    {
        return __('filament-phone-auth::provider.login_form.label');
    }

    /**
     * @throws Exception
     */
    public function isEnabled(Authenticatable $user): bool
    {
        if (! ($user instanceof HasPhoneAuthentication)) {
            throw new Exception('The user model must implement the [' . HasPhoneAuthentication::class . '] interface to use phone authentication.');
        }

        return $user->hasPhoneAuthentication();
    }

    /**
     * @throws Exception
     */
    public function sendCode(HasPhoneAuthentication $user): void
    {
        if (! ($user instanceof Model)) {
            throw new Exception('The [' . $user::class . '] class must be an instance of [' . Model::class . '] to use phone authentication.');
        }

        if (! method_exists($user, 'notify')) {
            $userClass = $user::class;

            throw new Exception("Model [{$userClass}] does not have a [notify()] method.");
        }

        $rateLimitingKey = "filament_phone_authentication.{$user->getKey()}";

        if (RateLimiter::tooManyAttempts($rateLimitingKey, maxAttempts: 2)) {
            return;
        }

        RateLimiter::hit($rateLimitingKey);

        $code = $this->generateCode();
        $codeExpiryMinutes = $this->getCodeExpiryMinutes();

        session()->put('filament_phone_authentication_code', Hash::make($code));
        session()->put('filament_phone_authentication_code_expires_at', now()->addMinutes($codeExpiryMinutes));

        $user->notify(app($this->getCodeNotification(), [
            'code' => $code,
            'codeExpiryMinutes' => $codeExpiryMinutes,
        ]));
    }

    public function enablePhoneAuthentication(HasPhoneAuthentication $user): void
    {
        $user->togglePhoneAuthentication(true);
    }

    public function generateCodesUsing(?Closure $callback): static
    {
        $this->generateCodesUsing = $callback;

        return $this;
    }

    /**
     * @throws RandomException
     */
    public function generateCode(): string
    {
        if ($this->generateCodesUsing) {
            return ($this->generateCodesUsing)();
        }

        return mb_str_pad((string) random_int(0, 999999), 6, '0', STR_PAD_LEFT);
    }

    public function verifyCode(string $code): bool
    {
        $codeHash = session('filament_phone_authentication_code');
        $codeExpiresAt = session('filament_phone_authentication_code_expires_at');

        if (
            blank($codeHash)
            || blank($codeExpiresAt)
            || (! Hash::check($code, $codeHash))
            || now()->greaterThan($codeExpiresAt)
        ) {
            return false;
        }

        session()->forget('filament_phone_authentication_code');
        session()->forget('filament_phone_authentication_code_expires_at');

        return true;
    }

    public function getManagementSchemaComponents(): array
    {
        $user = Filament::auth()->user();

        return [
            Actions::make($this->getActions())
                ->label(__('filament-phone-auth::provider.management_schema.actions.label'))
                ->belowContent(__('filament-phone-auth::provider.management_schema.actions.below_content'))
                ->afterLabel(fn (): Text => $this->isEnabled($user)
                    ? Text::make(__('filament-phone-auth::provider.management_schema.actions.messages.enabled'))
                        ->badge()
                        ->color('success')
                    : Text::make(__('filament-phone-auth::provider.management_schema.actions.messages.disabled'))
                        ->badge()),
        ];
    }

    /**
     * @return array<Action>
     */
    public function getActions(): array
    {
        $user = Filament::auth()->user();

        return [
            SetUpPhoneAuthenticationAction::make($this)
                ->hidden(fn (): bool => $this->isEnabled($user)),
            DisablePhoneAuthenticationAction::make($this)
                ->visible(fn (): bool => $this->isEnabled($user)),
        ];
    }

    public function codeExpiryMinutes(int $minutes): static
    {
        $this->codeExpiryMinutes = $minutes;

        return $this;
    }

    public function getCodeExpiryMinutes(): int
    {
        return $this->codeExpiryMinutes;
    }

    /**
     * @throws Exception
     */
    public function beforeChallenge(Authenticatable $user): void
    {
        if (! ($user instanceof HasPhoneAuthentication)) {
            throw new Exception('The user model must implement the [' . HasPhoneAuthentication::class . '] interface to use phone authentication.');
        }

        $this->sendCode($user);
    }

    /**
     * @param  Authenticatable&HasPhoneAuthentication  $user
     *
     * @throws Exception
     */
    public function getChallengeFormComponents(Authenticatable $user): array
    {
        return [
            OneTimeCodeInput::make('code')
                ->label(__('filament-phone-auth::provider.login_form.code.label'))
                ->validationAttribute('code')
                ->columnSpanFull()
                ->belowContent(Action::make('resend')
                    ->label(__('filament-phone-auth::provider.login_form.code.actions.resend.label'))
                    ->link()
                    ->action(function () use ($user): void {
                        $this->sendCode($user);

                        Notification::make()
                            ->title(__('filament-phone-auth::provider.login_form.code.actions.resend.notifications.resent.title'))
                            ->success()
                            ->send();
                    }))
                ->required()
                ->rule(function (): Closure {
                    return function (string $attribute, $value, Closure $fail): void {
                        if ($this->verifyCode($value)) {
                            return;
                        }

                        $fail(__('filament-phone-auth::provider.login_form.code.messages.invalid'));
                    };
                }),
        ];
    }

    public function codeNotification(string $notification): static
    {
        $this->codeNotification = $notification;

        return $this;
    }

    /**
     * @throws InvalidConfig
     */
    public function getCodeNotification(): string
    {
        $notificationClass = config('filament-phone-auth.notification');

        if (! is_a($notificationClass, VerifyPhoneAuthentication::class, true)) {
            throw InvalidConfig::invalidNotification($notificationClass);
        }

        return $notificationClass;
    }
}
