<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\LoginRequest;
use App\Http\Requests\Api\Auth\RegisterRequest;
use App\Services\Auth\RegisterationService;

class RegisterationController extends Controller
{
    public function login(string $provider, RegisterationService $registerationService, LoginRequest $request)
    {
        $token = $registerationService->login($provider, $request->validated());

        return response(['token' => $token]);
    }

    public function register(string $provider, RegisterationService $registerationService, RegisterRequest $request)
    {
        $token = $registerationService->register($provider, $request->validated());

        return response(['token' => $token]);
    }

    public function logout()
    {
        auth()->user()->currentAccessToken()->delete();

        return response()->noContent();
    }
}
