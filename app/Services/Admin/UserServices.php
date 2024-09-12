<?php

namespace App\Services\Admin;

use App\Models\User;

class UserServices
{

    public function getAllUsers($perPage = 10)
    {
        return User::paginate($perPage);
    }
}
