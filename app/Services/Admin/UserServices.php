<?php

namespace App\Services\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserServices
{

    public function getAllUsers($filters = [], $searchValue = '', $start = 0, $length = 10)
    {
        $query = User::query();

        if (!empty($searchValue)) {
            $query->where(function ($q) use ($searchValue) {
                $q->where('name', 'like', "%{$searchValue}%")
                    ->orWhere('email', 'like', "%{$searchValue}%")
                    ->orWhere('phone', 'like', "%{$searchValue}%")
                    ->orWhere('rol', 'like', "%{$searchValue}%")
                    ->orWhere('status', 'like', "%{$searchValue}%");
            });
        }

        if (!empty($filters['name'])) {
            $query->where('name', 'like', "%{$filters['name']}%");
        }

        if (!empty($filters['email'])) {
            $query->where('email', 'like', "%{$filters['email']}%");
        }

        if (!empty($filters['phone'])) {
            $query->where('phone', 'like', "%{$filters['phone']}%");
        }

        if (!empty($filters['rol'])) {
            $query->where('rol', $filters['rol']);
        }

        if (!empty($filters['status'])) {
            $query->where('status', $filters['status']);
        }

        $totalRecords = User::count();

        $filteredRecords = $query->count();

        $users = $query->skip($start)->take($length)->get();

        $users->each(function ($user) {
            $user->action = '';
        });

        return [
            'total' => $totalRecords,
            'filtered' => $filteredRecords,
            'data' => $users
        ];
    }

    public function getUserById($id)
    {
        return User::find($id);
    }

    public function update($id, array $data)
    {
        $user = $this->getUserById($id);

        if ($user) {
            if (!empty($data['password'])) {
                $data['password'] = Hash::make($data['password']);
            } else {
                unset($data['password']);
            }

            $user->update($data);
        }

        return $user;
    }

    public function delete($id)
    {
        $user = $this->getUserById($id);

        if ($user) {
            $user->delete();
            return true;
        }

        return false;
    }

    public function editProfile()
    {
        return Auth::user();
    }
}
