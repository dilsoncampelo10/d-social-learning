<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Users\UserRequest;
use App\Services\UserService;


class RegisteredUserController extends Controller
{
    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function __construct(protected UserService $service){}

    public function store(UserRequest $request)
    {

        $user = $this->service->add($request->all());

        return response()->json($user, 201);
    }
}
