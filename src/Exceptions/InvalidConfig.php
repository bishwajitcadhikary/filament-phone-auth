<?php

namespace Frolax\FilamentPhoneAuth\Exceptions;

use Exception;

class InvalidConfig extends Exception
{
    public static function invalidNotification(mixed $notificationClass): self
    {
        return new self("The configured notification `{$notificationClass}` is not a valid notification class because it does not extend `Frolax\FilamentPhoneAuth\Notifications\VerifyPhoneAuthentication`.");
    }
}
