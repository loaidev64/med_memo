<?php

namespace App\Services\Auth\Providers;

use App\Helpers\Auth\RegisterationHelper;
use App\Services\Auth\RegisterationInterface;

class FacebookProvider implements RegisterationInterface
{
    public const PROVIDER = 'facebook';

    public function login(array $attributes): string
    {
        return RegisterationHelper::login(FacebookProvider::PROVIDER, $attributes['email'], $attributes['password']);
    }

    public function register(array $attributes): string
    {
        dd(FacebookProvider::PROVIDER);
    }
}
