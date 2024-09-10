<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/acceso', function () {
    return view('auth.login');
})->name('acceso');

Route::post('/acceso-usuario', [AuthController::class, 'login'])->name('login');
Route::post('/cerrar-sesion', [AuthController::class, 'logout'])->name('logout');

Route::get('/restablecer-clave', function () {
    return view('auth.forgot-password');
})->name('forgetPasswordForm');

Route::get('/loading', function () {
    return view('loading');
})->name('loading');

Route::post('/restablecer-clave/email', [AuthController::class, 'forgetPassword'])->name('password.email');
Route::get('/proceso/olvidar/clave', [AuthController::class, 'processForgetPassword'])->name('processForgetPassword');

Route::get('/clave/restablecer/{token}', [AuthController::class, 'showResetForm'])->name('password.reset');

Route::post('/clave/actualizar', [AuthController::class, 'updatePassword'])->name('password.update');

Route::get('/403', function () {
    return view('error.403');
})->name('403');

Route::get('/404', function () {
    return view('error.404');
})->name('404');

Route::get('/401', function () {
    return view('error.401');
})->name('401');

Route::middleware(['auth', 'checkStatus'])->group(function () {
    Route::get('/inicio', function () {
        return view('layout.app');
    })->name('inicio');
});
