<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/restablecer-clave', function () {
    return view('auth.forgot-password');
});


Route::get('/inicio', function () {
    return view('layout.app');
});
