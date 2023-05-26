<?php

namespace App\Services\Auth;

use App\Services\Auth\Providers\FacebookProvider;
use App\Services\Auth\Providers\GoogleProvider;
use App\Services\Auth\Providers\LocalProvider;

class RegisterationService
{
    public const PROVIDERS = [
        GoogleProvider::PROVIDER => GoogleProvider::class,
        FacebookProvider::PROVIDER => FacebookProvider::class,
        LocalProvider::PROVIDER => LocalProvider::class,
    ];

    public function login(string $provider, array $attributes): string
    {
        $token = (new (RegisterationService::PROVIDERS[$provider]))->login($attributes);

        return $token;
    }

    public function register(string $provider, array $attributes): string
    {
        $token = (new (RegisterationService::PROVIDERS[$provider]))->register($attributes);

        return $token;
    }
}
