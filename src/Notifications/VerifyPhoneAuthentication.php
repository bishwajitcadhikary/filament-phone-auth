<?php

namespace Frolax\FilamentPhoneAuth\Notifications;

use BadMethodCallException;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;

class VerifyPhoneAuthentication extends Notification implements ShouldQueue
{
    use Queueable;

    public function __construct(
        public string $code,
        public int $codeExpiryMinutes,
    ) {}

    public function via(object $notifiable): array
    {
        return [config('filament-phone-auth.channel', 'vonage')];
    }

    public function __call($method, $arguments)
    {
        if (strpos($method, 'to') === 0) {
            return __('filament-phone-auth::notifications/verify-phone-authentication.message', [
                'code' => $this->code,
                'minutes' => $this->codeExpiryMinutes,
            ]);
        }

        throw new BadMethodCallException("Method {$method} does not exist.");
    }
}
