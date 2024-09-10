<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthServices
{
    public function login($email, $password)
    {
        $user = User::where('email', $email)->first();

        if ($user && Hash::check($password, $user->password)) {
            Auth::login($user);
            return true;
        }

        return false;
    }

    public function logout()
    {
        Auth::logout();
    }

    public function register(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'rol' => $data['rol'],
            'phone' => $data['phone'],
        ]);

        return $user;
    }
}
