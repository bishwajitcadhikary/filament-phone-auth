<?php

declare(strict_types=1);

namespace Frolax\FilamentPhoneAuth\Actions;

use Closure;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms\Components\OneTimeCodeInput;
use Filament\Notifications\Notification;
use Filament\Support\Enums\Width;
use Filament\Support\Icons\Heroicon;
use Frolax\FilamentPhoneAuth\Contracts\HasPhoneAuthentication;
use Frolax\FilamentPhoneAuth\PhoneAuthentication;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\DB;

class SetUpPhoneAuthenticationAction
{
    public static function make(PhoneAuthentication $phoneAuthentication): Action
    {
        return Action::make('setUpPhoneAuthentication')
            ->label(__('filament-phone-auth::actions/set-up.label'))
            ->color('primary')
            ->icon(Heroicon::LockClosed)
            ->link()
            ->mountUsing(function () use ($phoneAuthentication): void {
                /** @var HasPhoneAuthentication $user */
                $user = Filament::auth()->user();

                $phoneAuthentication->sendCode($user);
            })
            ->modalWidth(Width::Large)
            ->modalIcon(Heroicon::OutlinedLockClosed)
            ->modalIconColor('primary')
            ->modalHeading(__('filament-phone-auth::actions/set-up.modal.heading'))
            ->modalDescription(__('filament-phone-auth::actions/set-up.modal.description'))
            ->schema([
                OneTimeCodeInput::make('code')
                    ->label(__('filament-phone-auth::actions/set-up.modal.form.code.label'))
                    ->belowContent(Action::make('resend')
                        ->label(__('filament-phone-auth::provider.login_form.code.actions.resend.label'))
                        ->link()
                        ->action(function () use ($phoneAuthentication): void {
                            /** @var HasPhoneAuthentication $user */
                            $user = Filament::auth()->user();

                            $phoneAuthentication->sendCode($user);

                            Notification::make()
                                ->title(__('filament-phone-auth::actions/set-up.modal.form.code.actions.resend.notifications.resent.title'))
                                ->success()
                                ->send();
                        }))
                    ->validationAttribute(__('filament-phone-auth::actions/set-up.modal.form.code.validation_attribute'))
                    ->required()
                    ->rule(function () use ($phoneAuthentication): Closure {
                        return function (string $attribute, $value, Closure $fail) use ($phoneAuthentication): void {
                            if ($phoneAuthentication->verifyCode($value)) {
                                return;
                            }

                            $fail(__('filament-phone-auth::actions/set-up.modal.form.code.messages.invalid'));
                        };
                    }),
            ])
            ->modalSubmitAction(fn (Action $action) => $action
                ->label(__('filament-phone-auth::actions/set-up.modal.actions.submit.label')))
            ->action(function (): void {
                /** @var Authenticatable&HasPhoneAuthentication $user */
                $user = Filament::auth()->user();

                DB::transaction(function () use ($user): void {
                    $user->togglePhoneAuthentication(true);
                });

                Notification::make()
                    ->title(__('filament-phone-auth::actions/set-up.notifications.enabled.title'))
                    ->success()
                    ->icon(Heroicon::OutlinedLockClosed)
                    ->send();
            })
            ->rateLimit(5);
    }
}
