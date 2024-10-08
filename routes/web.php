<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\UsuarioController;

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

    Route::get('/perfil', [UsuarioController::class, 'show'])->name('user.show');
    Route::get('/perfil/editar', [UsuarioController::class, 'editProfile'])->name('profile.edit');
    Route::put('/perfil/editar/enviar', [UsuarioController::class, 'updateProfile'])->name('user.updateProfile');


    Route::group(['prefix' => 'administrador', 'middleware' => ['check.role:Administrador']], function () {

        Route::get('/inicio', function () {
            return view('home-admin');
        })->name('home.dashboard_admin');


        // RUTAS DE CLIENTE
        Route::get('/clientes', [ClienteController::class, 'index'])->name('cliente.index');
        Route::get('/listado-cliente', [ClienteController::class, 'getAllClient'])->name('cliente.list_client');
        Route::get('/nuevo-cliente', [ClienteController::class, 'create'])->name('cliente.create');
        Route::post('/nuevo-cliente/enviar', [ClienteController::class, 'store'])->name('cliente.store');
        Route::get('cliente/{id}/editar', [ClienteController::class, 'getClient'])->name('cliente.edit');
        Route::put('cliente/{id}', [ClienteController::class, 'update'])->name('cliente.update');
        Route::delete('/cliente/{id}', [ClienteController::class, 'delete'])->name('cliente.delete');
        Route::get('cliente/{id}/ver', [ClienteController::class, 'viewClient'])->name('cliente.viewClient');

        // RUTAS DE MASCOTAS

        // RUTAS DE CITAS

        // RUTAS DE HISTORIAL MEDICO

        // RUTAS DE PRODUCTOS

        // RUTAS DE INVENTARIO

        // RUTAS DE FACTURAS

        // RUTAS DE PAGOS

        // RUTAS DE USUARIO
        Route::get('/usuarios', [UsuarioController::class, 'index'])->name('user.index');
        Route::get('/listado-usuario', [UsuarioController::class, 'getAllUsers'])->name('user.list_user');
        Route::get('/nuevo-usuario', [UsuarioController::class, 'create'])->name('user.create');
        Route::post('/nuevo-usuario/enviar', [AuthController::class, 'register'])->name('register');
        Route::get('user/{id}/editar', [UsuarioController::class, 'getUser'])->name('user.edit');
        Route::put('user/{id}', [UsuarioController::class, 'update'])->name('user.update');
        Route::delete('/user/{id}', [UsuarioController::class, 'delete'])->name('user.delete');
        Route::get('user/{id}/ver', [UsuarioController::class, 'viewUser'])->name('user.viewUser');


        // RUTAS DE AUDITORIAS

        // RUTAS DE PROVEEDORES

        // RUTAS DE PRODUCTOS PROVEEDORES

    });


    Route::group(['prefix' => 'veterinarios', 'middleware' => ['check.role:Veterinario']], function () {
        Route::get('/inicio', function () {
            return view('home-vet');
        })->name('home.dashboard_vet');
    });

    Route::group(['prefix' => 'test', 'middleware' => ['check.role:Test']], function () {
        Route::get('/inicio', function () {
            return view('home-test');
        })->name('home.dashboard_test');
    });
});
