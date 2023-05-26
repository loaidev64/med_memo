<?php

namespace App\Services\Auth;

interface RegisterationInterface
{
    public function login(array $attributes): string;

    public function register(array $attributes): string;
}
