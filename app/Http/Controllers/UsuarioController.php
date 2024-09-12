<?php

namespace App\Http\Controllers;

use App\Services\Admin\UserServices;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    protected $userService;

    public function __construct(UserServices $userService)
    {
        $this->userService = $userService;
    }

    public function getAllUsers()
    {
        $users = $this->userService->getAllUsers(10);
        return view('usuario.list-user', compact('users'));
    }
}
