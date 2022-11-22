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
        $username = $request->username;
        $password = $request->password;

        $user_query = User::where('username', $username);
        if ($user_query->exists()) {
            if (Hash::check($password, $user_query->first()->password)) {
                return response()->json([
                    'status' => 200,
                    'message' => 'Berhasil login',
                    'data' => [
                        'id' => $user_query->first()->id,
                        'username' => $username,
                        'name' => $user_query->first()->name
                    ]
                ], Response::HTTP_OK);
            }
            return response()->json([
                'status' => 422,
                'message' => 'Username atau password salah',
                'data' => [
                    'username' => $username,
                ]
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        return response()->json([
            'status' => 422,
            'message' => 'Username atau password tidak terdaftar',
            'data' => [
                'username' => $username,
            ]
        ], Response::HTTP_UNPROCESSABLE_ENTITY);
    }
}
