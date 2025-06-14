<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Channel
    |--------------------------------------------------------------------------
    |
    | The channel used to send the verification code.
    | Supported channels: 'vonage', 'twilio', 'nexmo', etc.
    |
    */
    'channel' => env('FILAMENT_PHONE_AUTH_CHANNEL', 'vonage'),

    /*
    |--------------------------------------------------------------------------
    | Notification
    |--------------------------------------------------------------------------
    |
    | The notification class used to send the verification code.
    | This class should extend `Frolax\FilamentPhoneAuth\Notifications\VerifyPhoneAuthentication`.
    | You can customize the notification class to change the message format or
    | add additional functionality.
    |
     */
    'notification' => Frolax\FilamentPhoneAuth\Notifications\VerifyPhoneAuthentication::class,
];
