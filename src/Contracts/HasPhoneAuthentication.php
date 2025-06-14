<?php

declare(strict_types=1);

namespace Frolax\FilamentPhoneAuth\Contracts;

interface HasPhoneAuthentication
{
    public function hasPhoneAuthentication(): bool;

    public function togglePhoneAuthentication(bool $condition): void;
}
