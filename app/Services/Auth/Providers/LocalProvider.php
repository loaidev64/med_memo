<?php

namespace App\Services\Auth\Providers;

use App\Helpers\Auth\RegisterationHelper;
use App\Services\Auth\RegisterationInterface;

class LocalProvider implements RegisterationInterface
{
    public const PROVIDER = 'local';

    public function login(array $attributes): string
    {
        return RegisterationHelper::login(LocalProvider::PROVIDER, $attributes['email'], $attributes['password']);
    }

    public function register(array $attributes): string
    {
        dd(LocalProvider::PROVIDER);
    }
}
