<?php

namespace App\Helpers\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class RegisterationHelper
{
    static public function login(string $provider, string $email, string $password): string
    {
        $user = User::where('email', $email)->first();
        if (!$user || !Hash::check($password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        } else if ($user->provider !== $provider) {
            throw ValidationException::withMessages([
                'email' => [__('validation.provider') . $user->provider],
            ]);
        }

        return $user->createToken('token')->plainTextToken;
    }
}
