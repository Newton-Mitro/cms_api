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
            return response()->json([
                'data' => $request->all(),
                'message' => $exception->errorInfo[2],
                'errors' => null,
            ]);
        }
    }

    public function login(LoginRequest $request) {
        $credentials = $request->only('email', 'password');
        if ($token = $this->guard()->attempt($credentials)) {
            return $this->respondWithToken($token);
        }

        return response()->json([
            'data' => $request->all(),
            'message' => 'Invalid email or password',
            'errors' => null,
        ], 401);
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
    }

    public function user() {
        return response()->json([
            'data' => $this->guard()->user(),
            'message' => 'User information retrieve successfully.',
            'errors' => null,
        ], 200);
    }

    public function refresh() {
        return $this->respondWithToken($this->guard()->refresh());
    }

    public function logout() {
        return response()->json([
            'data' => $this->guard()->logout(),
            'message' => 'Successfully logged out.',
            'errors' => null,
        ], 200);
    }

    public function guard() {
        return Auth::guard();
    }
}
