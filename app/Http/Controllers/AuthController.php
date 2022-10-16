<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;
use App\Http\Requests\UserRegistrationRequest;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller {

    public function __construct() {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }

    public function register(UserRegistrationRequest $request) {
        try {
            $user = new User();
            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();
            return response()->json([
                'data' => $user,
                'message' => 'You are successfully register',
                'errors' => null,
            ]);
        } catch (QueryException $exception) {
            return response()->json(
                $exception
            );
        }
    }

    public function login(LoginRequest $request) {
        $credentials = $request->only('email', 'password');
        if ($token = $this->guard()->attempt($credentials)) {
            return $this->respondWithToken($token);
        }

        return response()->json(['message' => 'Invalid email or password'], 401);
    }

    public function respondWithToken($token) {

        return response()->json([
            "data" => [
                'user' => $this->guard()->user(),
                'access_token' => $token,
                'token_type' => 'bearer',
                'expires_in' => $this->guard()->factory()->getTTL() * 60,
            ],
            "message" => 'Login success',
            'errors' => null
        ], Response::HTTP_OK);

        // return response()->json([
        //     'access_token' => $token,
        //     'token_type' => 'bearer',
        //     'expires_in' => $this->guard()->factory()->getTTL() * 60,
        // ]);
    }

    public function user() {
        return response()->json($this->guard()->user());
    }

    public function refresh() {
        return $this->respondWithToken($this->guard()->refresh());
    }

    public function logout() {
        $this->guard()->logout();
        return response()->json(['message' => 'Successfully logged out']);
    }

    public function guard() {
        return Auth::guard();
    }
}
