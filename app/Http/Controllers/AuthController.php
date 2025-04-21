<?php

namespace App\Http\Controllers;

use App\Facades\AuthFacade;
use App\Http\Requests\LoginRequest;
use App\Services\ApiResponseFormat;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        $user = AuthFacade::login($request);
        if (!$user) {
            return ApiResponseFormat::error([], 'User not found', 401);
        }
        return ApiResponseFormat::success($user, 'User logged in successfully');
    }
}
