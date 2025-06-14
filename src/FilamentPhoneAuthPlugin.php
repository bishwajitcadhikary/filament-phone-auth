<?php

namespace Frolax\FilamentPhoneAuth;

use Filament\Contracts\Plugin;
use Filament\Panel;

class FilamentPhoneAuthPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-phone-auth';
    }

    public function register(Panel $panel): void
    {
        $panel->multiFactorAuthentication([
            ...$panel->getMultiFactorAuthenticationProviders(),
            PhoneAuthentication::make(),
        ]);
    }

    public function boot(Panel $panel): void
    {
        //
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        /** @var static $plugin */
        $plugin = filament(app(static::class)->getId());

        return $plugin;
    }
}
