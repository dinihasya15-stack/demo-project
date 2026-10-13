<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

/**
 * @group Auth
 *
 * Login and logout for the API.
 */
class AuthController extends Controller
{
    /**
     * Login
     *
     * Log in with email and password to get a bearer token.
     *
     * @unauthenticated
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            return response()->json(['message' => 'Email atau password salah'], 422);
        }

        return response()->json([
            'token' => $user->createToken('api')->plainTextToken,
            'user' => $user,
        ]);
    }

    /**
     * Logout
     *
     * Delete the token currently being used.
     */
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->noContent();
    }
}