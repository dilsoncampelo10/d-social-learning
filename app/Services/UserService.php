<?php

namespace App\Services;

use App\Actions\Users\CreateNewUser;

class UserService
{
    public function __construct(protected CreateNewUser $action)
    {
    }
    public function add(array $data)
    {
        return $this->action->create($data);
    }
}
