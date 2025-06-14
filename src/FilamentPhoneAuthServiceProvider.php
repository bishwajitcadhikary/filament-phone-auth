<?php

namespace Frolax\FilamentPhoneAuth;

use Frolax\FilamentPhoneAuth\Testing\TestsFilamentPhoneAuth;
use Livewire\Features\SupportTesting\Testable;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentPhoneAuthServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-phone-auth';

    public static string $viewNamespace = 'filament-phone-auth';

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->publishConfigFile()
                    ->publishMigrations()
                    ->askToStarRepoOnGitHub('frolax/filament-phone-auth');
            });

        $configFileName = $package->shortName();

        if (file_exists($package->basePath("/../config/{$configFileName}.php"))) {
            $package->hasConfigFile();
        }

        if (file_exists($package->basePath('/../database/migrations'))) {
            $package->hasMigrations($this->getMigrations());
        }

        if (file_exists($package->basePath('/../resources/lang'))) {
            $package->hasTranslations();
        }
    }

    public function packageBooted(): void
    {
        Testable::mixin(new TestsFilamentPhoneAuth);
    }

    /**
     * @return array<string>
     */
    protected function getMigrations(): array
    {
        return [
            'add_phone_auth_columns',
        ];
    }
}
