<?php
namespace App\Interfaces;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;

interface AuthServiceInterface
{
    public function login(LoginRequest $request);
    // public function logout();
    // public function getUserTasks();
}