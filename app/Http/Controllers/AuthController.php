<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Auth\RoleService;
use App\Http\Requests\LoginRequest;
use App\Services\Auth\AuthServices;
use App\Http\Requests\ResetPasswordRequest;
use App\Http\Requests\ForgetPasswordRequest;
use App\Http\Requests\RegisterRequest;

class AuthController extends Controller
{
    protected $authService;
    protected $roleService;

    public function __construct(AuthServices $authService, RoleService $roleService)
    {
        $this->authService = $authService;
        $this->roleService = $roleService;
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if ($this->authService->login($credentials['email'], $credentials['password'])) {
            $user = auth()->user();

            return $this->roleService->redirectBasedOnRole($user->rol);
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
        return view('loading')->with('redirectRoute', route('password.process_forget_password'));
    }

    public function processForgetPassword()
    {
        $email = session('reset_email');
        if (!$email) {
            return redirect()->route('password.forget_password_form')->withErrors(['email' => 'Ocurrió un error inesperado.']);
        }

        $response = $this->authService->sendResetPasswordEmail($email);

        if ($response['status']) {
            return view('auth.reset-success');
        }

        return view('loading')->with('redirectRoute', route('password.process_forget_password'));
    }

    public function showResetForm($token)
    {
        $result = $this->authService->showResetForm($token);
        if (!$result['status']) {
            return redirect()->route('password.forget_password_form')->withErrors(['email' => $result['message']]);
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

    public function register(RegisterRequest $request)
    {
        $user = $this->authService->register($request->validated());

        return view('loading')->with([
            'redirectRoute' => route('user.index'),
            'success' => 'created',
        ]);
    }
}
