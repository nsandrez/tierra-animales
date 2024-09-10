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
});

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
