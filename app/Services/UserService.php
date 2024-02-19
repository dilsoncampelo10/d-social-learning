<?php

namespace App\Services;

use App\Actions\Users\CreateNewUser;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserService
{
    public function __construct(protected CreateNewUser $action)
    {
    }
    public function add(array $data)
    {
        return $this->action->create($data);
    }

    public function login(array $data)
    {
        $array = [];

        $user = User::where('email', $data['email'])->first();

        if (!$user || !Hash::check($data['password'], $user->password)) {
            $array = [
                'errorMessage' => 'The provided credentials are incorrect'
            ];
        }
        $token = $user->createToken($data['device_name'])->plainTextToken;

        $array += [
            'user' => $user,
            'token' => $token
        ];

        return $array;
    }
}
