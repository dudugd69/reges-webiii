<?php

namespace App\Services;

use App\Models\User;

class UserServices
{
    public function __construct(private User $user) {}

    public function store(array $data): User
    {
        return $this->user->create($data);
    }

}
