<?php

namespace App\Repositories\UserReponse;

interface UserResponseRepositoryContract
{
    /**
     * Create UserResponse
     */
    public function create(array $data): void;
}
