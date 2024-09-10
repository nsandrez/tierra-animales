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

Route::get('/acesso', function () {
    return view('auth.login');
});

Route::post('/login', [AuthController::class, 'login']);


Route::get('/restablecer-clave', function () {
    return view('auth.forgot-password');
});

Route::get('/403', function () {
    return view('error.403');
})->name('403');


Route::middleware(['auth', 'checkStatus'])->group(function () {

    Route::middleware(['auth', 'checkStatus'])->group(function () {
        Route::get('/inicio', function () {
            return view('layout.app');
        })->name('inicio'); // Nombre de la ruta
    });
});
