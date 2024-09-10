<?php

namespace App\Services;

use App\Models\User;
use App\Mail\ResetPasswordMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;

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


    public function mailExists($email)
    {
        return User::where('email', $email)->exists();
    }


    public function sendResetPasswordEmail($email)
    {
        $user = User::where('email', $email)->first();
        if (!$user) {
            return ['status' => false, 'message' => 'No hay ningún usuario registrado con ese correo electrónico.'];
        }

        $token = bin2hex(random_bytes(64));
        $expires = now()->addHours(24);

        $user->reset_token = $token;
        $user->token_expiry = $expires;
        $user->save();

        $resetLink = url("/clave/restablecer/{$token}");

        try {
            Mail::to($email)->send(new ResetPasswordMail($user, $resetLink));
            return ['status' => true, 'message' => 'Correo de restablecimiento enviado con éxito.'];
        } catch (\Exception $e) {
            return ['status' => false, 'message' => 'Error al enviar el correo: ' . $e->getMessage()];
        }
    }

    public function showResetForm($token)
    {
        $user = User::where('reset_token', $token)->where('token_expiry', '>', now())->first();
        if (!$user) {
            return ['status' => false, 'message' => 'El token no es válido o ha expirado.'];
        }
        return ['status' => true, 'user' => $user];
    }

    public function updatePassword($token, $newPassword)
    {
        $user = User::where('reset_token', $token)->where('token_expiry', '>', now())->first();
        if (!$user) {
            return ['status' => false, 'message' => 'El token no es válido o ha expirado.'];
        }

        $user->password = Hash::make($newPassword);
        $user->reset_token = null;
        $user->token_expiry = null;
        $user->save();

        return ['status' => true, 'message' => 'Contraseña actualizada correctamente.'];
    }
}
