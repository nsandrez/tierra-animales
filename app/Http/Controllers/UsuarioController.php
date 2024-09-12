<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Admin\UserServices;
use App\Http\Requests\EditUsuarioRequest;

class UsuarioController extends Controller
{
    protected $userService;

    public function __construct(UserServices $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        return view('usuario.list-user');
    }

    public function getAllUsers(Request $request)
    {
        $searchValue = $request->input('search.value', '');

        $filters = [
            'name' => $request->input('columns.0.search.value', ''),
            'email' => $request->input('columns.1.search.value', ''),
            'phone' => $request->input('columns.2.search.value', ''),
            'rol' => $request->input('columns.3.search.value', ''),
            'status' => $request->input('columns.4.search.value', ''),
        ];

        $start = $request->input('start', 0);
        $length = $request->input('length', 10);

        $users = $this->userService->getAllUsers($filters, $searchValue, (int) $start, (int) $length);

        return response()->json([
            'draw' => (int) $request->input('draw', 1),
            'recordsTotal' => $users['total'],
            'recordsFiltered' => $users['filtered'],
            'data' => $users['data']
        ]);
    }

    public function create()
    {
        return view('usuario.add-user');
    }

    public function getUser($id)
    {
        $user = $this->userService->getUserById($id);

        if (!$user) {
            return redirect()->route('user.index')->with('error', 'Usuario no encontrado');
        }

        return view('usuario.edit-user', compact('user'));
    }

    public function update(EditUsuarioRequest $request, $id)
    {
        $user = $this->userService->getUserById($id);

        if (!$user) {
            return redirect()->route('user.index')->with('error', 'Usuario no encontrado');
        }

        $data = $request->validated();
        $this->userService->update($id, $data);

        return view('loading')->with([
            'redirectRoute' => route('user.index'),
            'success' => 'edited',
        ]);
    }


    public function delete($id)
    {
        $user = $this->userService->getUserById($id);

        if (!$user) {
            return response()->json(['success' => false, 'message' => 'Usuario no encontrado'], 404);
        }

        $this->userService->delete($id);

        return response()->json(['success' => true, 'message' => 'Usuario eliminado correctamente']);
    }

    public function viewUser($id)
    {
        $user = $this->userService->getUserById($id);

        if (!$user) {
            return redirect()->route('user.index')->with('error', 'Usuario no encontrado');
        }

        return view('usuario.view-user', compact('user'));
    }
}
