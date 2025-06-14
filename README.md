# Filament Phone Authentication

[![Latest Version on Packagist](https://img.shields.io/packagist/v/frolax/filament-phone-auth.svg?style=flat-square)](https://packagist.org/packages/frolax/filament-phone-auth)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/frolax/filament-phone-auth/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/frolax/filament-phone-auth/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/frolax/filament-phone-auth/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/frolax/filament-phone-auth/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/frolax/filament-phone-auth.svg?style=flat-square)](https://packagist.org/packages/frolax/filament-phone-auth)

A Laravel package that adds phone number-based two-factor authentication to your Filament admin panel. This package provides a secure way to implement phone verification as a second factor for authentication in your Filament applications.

## Features

- Phone number-based two-factor authentication for Filament
- Customizable verification code generation
- Rate limiting for code requests
- Configurable code expiration time
- Customizable notification system
- Easy integration with existing Filament applications
- User-friendly management interface

## Requirements

- PHP 8.2 or higher
- Laravel 10.x
- Filament 4.x

## Installation

You can install the package via composer:

```bash
composer require frolax/filament-phone-auth
```

Publish the configuration file:

```bash
php artisan vendor:publish --tag="filament-phone-auth-config"
```

## Configuration

The package configuration file (`config/filament-phone-auth.php`) allows you to customize various aspects of the phone authentication:

```php
return [
    'notification' => \Frolax\FilamentPhoneAuth\Notifications\VerifyPhoneAuthentication::class,
    // Add other configuration options as needed
];
```

## Usage

1. Implement the `HasPhoneAuthentication` interface in your User model:

```php
use Frolax\FilamentPhoneAuth\Contracts\HasPhoneAuthentication;

class User extends Authenticatable implements HasPhoneAuthentication
{
    public function hasPhoneAuthentication(): bool
    {
        return $this->phone_authentication_enabled;
    }

    public function togglePhoneAuthentication(bool $enabled): void
    {
        $this->phone_authentication_enabled = $enabled;
        $this->save();
    }
}
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Bishwajit Adhikary](https://github.com/frolax)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
