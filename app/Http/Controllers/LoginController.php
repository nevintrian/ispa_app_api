<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $user_query = User::where('email', $email)->first();
        if ($user_query->exists()) {
            if (Hash::check($password, $user_query->password)) {
                return response()->json([
                    'status' => 200,
                    'message' => 'Berhasil login',
                    'data' => [
                        'email' => $email,
                    ]
                ], Response::HTTP_OK);
                return response()->json([
                    'status' => 422,
                    'message' => 'Email atau password salah',
                    'data' => [
                        'email' => $email,
                    ]
                ], Response::HTTP_UNPROCESSABLE_ENTITY);
            }
        }
        return response()->json([
            'status' => 422,
            'message' => 'Username atau password tidak terdaftar',
            'data' => [
                'email' => $email,
            ]
        ], Response::HTTP_UNPROCESSABLE_ENTITY);
    }
}