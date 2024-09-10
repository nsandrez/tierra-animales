<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AuthServices;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\ForgetPasswordRequest;
use App\Http\Requests\ResetPasswordRequest;

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


    public function logout()
    {
        $this->authService->logout();
        return redirect()->route('acceso');
    }

    public function forgetPassword(ForgetPasswordRequest $request)
    {
        $email = $request->email;

        if (!$this->authService->mailExists($email)) {
            return back()->withErrors(['email' => 'No hay ningún usuario registrado con ese correo electrónico.']);
        }

        session(['reset_email' => $email]);
        return redirect()->route('loading');
    }

    public function processForgetPassword()
    {
        $email = session('reset_email');
        if (!$email) {
            return redirect()->route('forgetPasswordForm')->withErrors(['email' => 'Ocurrió un error inesperado.']);
        }

        $response = $this->authService->sendResetPasswordEmail($email);

        if ($response['status']) {
            return view('auth.reset-success');
        }

        return redirect()->route('forgetPasswordForm')->withErrors(['email' => $response['message']]);
    }

    public function showResetForm($token)
    {
        $result = $this->authService->showResetForm($token);
        if (!$result['status']) {
            return redirect()->route('forgetPasswordForm')->withErrors(['email' => $result['message']]);
        }
        return view('auth.reset-password', ['token' => $token]);
    }

    public function updatePassword(ResetPasswordRequest $request)
    {
        $response = $this->authService->updatePassword($request->token, $request->password);
        if (!$response['status']) {
            return back()->withErrors(['password' => $response['message']]);
        }

        return redirect()->route('acceso')->with('status', 'Tu contraseña ha sido actualizada exitosamente.');
    }


    public function register() {}
}
