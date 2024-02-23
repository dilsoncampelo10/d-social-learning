<?php

namespace App\Actions\Users;

use App\Jobs\WelcomeMailJob;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateNewUser
{
    public function create(array $data): User
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        WelcomeMailJob::dispatch($user);

        return $user;
    }
}
