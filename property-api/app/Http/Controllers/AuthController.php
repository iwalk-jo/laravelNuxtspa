<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Models\User;
use App\Traits\HttpResponses;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use \App\Http\Requests\StoreUserRequest;


class AuthController extends Controller
{
    use HttpResponses;

    /**
     * @param LoginUserRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(LoginUserRequest $request)
    {
        $request->validated($request->only(['email', 'password']));

        if (!Auth::attempt($request->only(['email', 'password']))) {
            return $this->error('', 'Credentials do not match', 401);
        }

        $user = User::where('email', $request->email)->first();

        return $this->success([
            'user' => $user,
            'token' => $user->createToken('API Token')->plainTextToken
        ]);
    }

    /**
     * @param StoreUserRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(StoreUserRequest $request)
    {
        $request->validated($request->only(['first_name', 'last_name', 'email', 'password']));

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return $this->success([
            'user' => $user,
            'token' => $user->createToken('API Token')->plainTextToken
        ]);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        Auth::user()->currentAccessToken()->delete();

        return $this->success([
            'message' => 'You have succesfully been logged out and your token has been removed'
        ]);
    }
}