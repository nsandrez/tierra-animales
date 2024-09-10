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

// Rutas de autenticación
Route::get('/acceso', function () {
    return view('auth.login');
})->name('acceso');

Route::post('/acceso/usuarios', [AuthController::class, 'login'])->name('login');
Route::post('/cerrar-sesion', [AuthController::class, 'logout'])->name('logout');

// Rutas para restablecimiento de contraseña
Route::get('/restablecer-clave', function () {
    return view('auth.forgot-password');
})->name('password.forget_password_form');

Route::post('/restablecer-clave/enviar', [AuthController::class, 'forgetPassword'])->name('password.email');
Route::get('/proceso-olvido-clave', [AuthController::class, 'processForgetPassword'])->name('password.process_forget_password');

Route::get('/clave/restablecer/{token}', [AuthController::class, 'showResetForm'])->name('password.reset');
Route::post('/clave/actualizar', [AuthController::class, 'updatePassword'])->name('password.update');

// Rutas de carga y errores
Route::get('/cargando', function () {
    return view('loading');
})->name('loading');

Route::get('/error/403', function () {
    return view('error.403');
})->name('error.403');

Route::get('/error/404', function () {
    return view('error.404');
})->name('error.404');

Route::get('/error/401', function () {
    return view('error.401');
})->name('error.401');


Route::middleware(['auth', 'check.status'])->group(function () {
    Route::group(['prefix' => 'veterinarios', 'middleware' => ['check.role:Veterinario']], function () {
        Route::get('/inicio', function () {
            return view('home-vet');
        })->name('home.dashboard_vet');
    });

    Route::group(['prefix' => 'admininistrador', 'middleware' => ['check.role:Administrador']], function () {
        Route::get('/inicio', function () {
            return view('home-admin');
        })->name('home.dashboard_admin');
    });

    Route::group(['prefix' => 'test', 'middleware' => ['check.role:Test']], function () {
        Route::get('/inicio', function () {
            return view('home-test');
        })->name('home.dashboard_test');
    });
});
