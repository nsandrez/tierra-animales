<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AuthServices;
use App\Http\Requests\LoginRequest;

class AuthController extends Controller
{
    protected $authService;

    public function __construct(AuthServices $authService)
    {
        $this->authService = $authService;
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if ($this->authService->login($credentials['email'], $credentials['password'])) {
            return redirect()->route('inicio'); 
        }

        return back()->withErrors([
            'email' => 'Las credenciales no coinciden.',
        ]);
    }


    public function logout() {}

    public function forgetPassword() {}

    public function register() {}
}
