<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function __invoke(): JsonResponse
    {
        $users = User::all();
        return response()->json([
            'users' => $users
        ], Response::HTTP_OK);
    }
}
