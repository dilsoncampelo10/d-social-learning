<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Users\LoginRequest;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthenticatedSessionController extends Controller
{
    /**
     * Handle an incoming authentication request.
     */
    public function __construct(protected UserService $service)
    {
    }

    public function store(LoginRequest $request)
    {
        $array = $this->service->login($request->all());

        if (array_key_exists('errorMessage', $array)) {
            return response()->json(['message' => $array['errorMessage']], 403);
        }


        return response()->json([
            'user' => $array['user'],
            'token' => $array['token']
        ], 201);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): Response
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return response()->noContent();
    }
}
