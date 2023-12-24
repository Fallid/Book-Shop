<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register(RegisterUserRequest $request)
    {
        $validatedRequest = $request->validated();
        try {
            $user = User::create($validatedRequest);

            return response()->json([
                "message" => "Success",
                "data" => $user
            ], 200);

        } catch (Exception $e) {
            return response()->json($e->getMessage(), 400);
        }
    }

    public function login(LoginUserRequest $request)
    {
        try {
            $validatedRequest = $request->validated();

            $user = User::where("email", $validatedRequest["email"])->first();
            if ($user) {
                $token = $user->createToken("auth_token")->plainTextToken;

                return response()->json([
                    "message" => "Success",
                    "token_type" => "Bearer",
                    "access_token" => $token
                ], 200);
            } else {
                return response()->json([
                    "message" => "Failed",
                ], 400);
            }
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 400);
        }
    }
}
