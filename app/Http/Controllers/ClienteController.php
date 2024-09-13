<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditarClienteRequest;
use App\Http\Requests\RegistrarClienteRequest;
use App\Services\Admin\ClientServices;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    protected $clientService;

    public function __construct(ClientServices $clientService)
    {
        $this->clientService = $clientService;
    }

    public function index()
    {
        return view('cliente.list-client');
    }

    public function getAllClient(Request $request)
    {
        $searchValue = $request->input('search.value', '');

        $filters = [
            'nombre' => $request->input('columns.0.search.value', ''),
            'correo_electronico' => $request->input('columns.1.search.value', ''),
            'telefono' => $request->input('columns.2.search.value', ''),
            'direccion' => $request->input('columns.3.search.value', ''),
        ];

        $start = $request->input('start', 0);
        $length = $request->input('length', 10);

        $clientes = $this->clientService->getAllClient($filters, $searchValue, (int) $start, (int) $length);

        return response()->json([
            'draw' => (int) $request->input('draw', 1),
            'recordsTotal' => $clientes['total'],
            'recordsFiltered' => $clientes['filtered'],
            'data' => $clientes['data']
        ]);
    }


    public function create()
    {
        return view('cliente.add-client');
    }

    public function store(RegistrarClienteRequest $request)
    {
        $data = $request->validated();

        $cliente = $this->clientService->create($data);

        return view('loading')->with([
            'redirectRoute' => route('cliente.index'),
            'success' => 'created',
        ]);
    }

    public function getClient($id)
    {
        $cliente = $this->clientService->getClientById($id);

        if (!$cliente) {
            return redirect()->route('cliente.index')->with('error', 'Cliente no encontrado.');
        }

        return view('cliente.edit-client', compact('cliente'));
    }

    public function update(EditarClienteRequest $request, $id)
    {
        $data = $request->validated();

        $cliente = $this->clientService->update($id, $data);

        if (!$cliente) {
            return redirect()->route('cliente.index')->with('error', 'Cliente no encontrado.');
        }

        return view('loading')->with([
            'redirectRoute' => route('cliente.index'),
            'success' => 'edited',
        ]);
    }

    public function delete($id)
    {
        $deleted = $this->clientService->delete($id);

        if (!$deleted) {
            return response()->json(['success' => false, 'message' => 'Cliente no encontrado.'], 404);
        }

        return response()->json(['success' => true, 'message' => 'Cliente eliminado correctamente.']);
    }

    public function viewClient($id)
    {
        $cliente = $this->clientService->getClientById($id);

        if (!$cliente) {
            return redirect()->route('cliente.index')->with('error', 'Cliente no encontrado.');
        }

        return view('cliente.view-client', compact('cliente'));
    }
}
