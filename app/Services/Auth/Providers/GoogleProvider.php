<?php

namespace App\Services\Auth\Providers;

use App\Helpers\Auth\RegisterationHelper;
use App\Services\Auth\RegisterationInterface;

class GoogleProvider implements RegisterationInterface
{
    public const PROVIDER = 'google';

    public function login(array $attributes): string
    {
        return RegisterationHelper::login(GoogleProvider::PROVIDER, $attributes['email'], $attributes['password']);
    }

    public function register(array $attributes): string
    {
        dd(GoogleProvider::PROVIDER);
    }
}
