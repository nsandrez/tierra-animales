<?php

namespace App\Services\Admin;

use App\Models\Cliente;

class ClientServices
{

    public function getAllClient($filters = [], $searchValue = '', $start = 0, $length = 10)
    {
        $query = Cliente::query();

        if (!empty($searchValue)) {
            $query->where(function ($q) use ($searchValue) {
                $q->where('nombre', 'like', "%{$searchValue}%")
                    ->orWhere('correo_electronico', 'like', "%{$searchValue}%")
                    ->orWhere('telefono', 'like', "%{$searchValue}%")
                    ->orWhere('direccion', 'like', "%{$searchValue}%");
            });
        }

        if (!empty($filters['nombre'])) {
            $query->where('nombre', 'like', "%{$filters['nombre']}%");
        }

        if (!empty($filters['correo_electronico'])) {
            $query->where('correo_electronico', 'like', "%{$filters['correo_electronico']}%");
        }

        if (!empty($filters['telefono'])) {
            $query->where('telefono', 'like', "%{$filters['telefono']}%");
        }

        if (!empty($filters['direccion'])) {
            $query->where('direccion', $filters['direccion']);
        }

        $totalRecords = Cliente::count();

        $filteredRecords = $query->count();

        $clientes = $query->skip($start)->take($length)->get();

        $clientes->each(function ($cliente) {
            $cliente->action = '';
        });

        return [
            'total' => $totalRecords,
            'filtered' => $filteredRecords,
            'data' => $clientes
        ];
    }

    public function getClientById($id)
    {
        return Cliente::find($id);
    }

    public function update($id, array $data)
    {
        $cliente = $this->getClientById($id);

        if ($cliente) {
            $cliente->update($data);
        }

        return $cliente;
    }


    public function delete($id)
    {
        $cliente = $this->getClientById($id);

        if ($cliente) {
            $cliente->delete();
            return true;
        }

        return false;
    }


    public function create(array $data)
    {
        $cliente = Cliente::create([
            'nombre' => $data['nombre'],
            'correo_electronico' => $data['correo_electronico'],
            'telefono' => $data['telefono'],
            'direccion' => $data['direccion'],
        ]);

        return $cliente;
    }
}
