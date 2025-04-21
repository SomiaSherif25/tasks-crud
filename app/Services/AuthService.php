<?php
namespace App\Services;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\UserResource;
use App\Interfaces\AuthServiceInterface;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthService implements AuthServiceInterface
{
    public function login(LoginRequest $request)
    {
        $validated = $request->validated();
        $user = User::where('email', $validated['email'])->firstOrFail();
        if (!$user || !Hash::check($validated['password'], $user->password)) {
            return false;
        }
        $token = $user->createToken('UserToken')->plainTextToken;
        return [
            'user' => new UserResource($user),
            'token' => $token,
        ];
    }
}