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
use Illuminate\Support\Facades\DB;

class DisablePhoneAuthenticationAction
{
    public static function make(PhoneAuthentication $phoneAuthentication): Action
    {
        return Action::make('disablePhoneAuthentication')
            ->label(__('filament-phone-auth::actions/disable.label'))
            ->color('danger')
            ->icon(Heroicon::LockOpen)
            ->link()
            ->mountUsing(function () use ($phoneAuthentication): void {
                /** @var HasPhoneAuthentication $user */
                $user = Filament::auth()->user();

                $phoneAuthentication->sendCode($user);
            })
            ->modalWidth(Width::Medium)
            ->modalIcon(Heroicon::OutlinedLockOpen)
            ->modalHeading(__('filament-phone-auth::actions/disable.modal.heading'))
            ->modalDescription(__('filament-phone-auth::actions/disable.modal.description'))
            ->schema([
                OneTimeCodeInput::make('code')
                    ->label(__('filament-phone-auth::actions/disable.modal.form.code.label'))
                    ->validationAttribute(__('filament-phone-auth::actions/disable.modal.form.code.validation_attribute'))
                    ->belowContent(Action::make('resend')
                        ->label(__('filament-phone-auth::actions/disable.modal.form.code.actions.resend.label'))
                        ->link()
                        ->action(function () use ($phoneAuthentication): void {
                            /** @var HasPhoneAuthentication $user */
                            $user = Filament::auth()->user();

                            $phoneAuthentication->sendCode($user);

                            Notification::make()
                                ->title(__('filament-phone-auth::actions/disable.modal.form.code.actions.resend.notifications.resent.title'))
                                ->success()
                                ->send();
                        }))
                    ->required()
                    ->rule(function () use ($phoneAuthentication): Closure {
                        return function (string $attribute, mixed $value, Closure $fail) use ($phoneAuthentication): void {
                            if (is_string($value) && $phoneAuthentication->verifyCode($value)) {
                                return;
                            }

                            $fail(__('filament-phone-auth::actions/disable.modal.form.code.messages.invalid'));
                        };
                    }),
            ])
            ->modalSubmitAction(fn (Action $action) => $action
                ->label(__('filament-phone-auth::actions/disable.modal.actions.submit.label')))
            ->action(function (): void {
                /** @var HasPhoneAuthentication $user */
                $user = Filament::auth()->user();

                DB::transaction(function () use ($user): void {
                    $user->togglePhoneAuthentication(false);
                });

                Notification::make()
                    ->title(__('filament-phone-auth::actions/disable.notifications.disabled.title'))
                    ->success()
                    ->icon(Heroicon::OutlinedLockOpen)
                    ->send();
            })
            ->rateLimit(5);
    }
}
