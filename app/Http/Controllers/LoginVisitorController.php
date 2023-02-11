<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class LoginVisitorController extends Controller
{
    public function index(Request $request)
    {
        $nik = $request->nik;
        $password = $request->password;

        $user_query = Visitor::where('nik', $nik);
        if ($user_query->exists()) {
            if (Hash::check($password, $user_query->first()->password)) {
                return response()->json([
                    'status' => 200,
                    'message' => 'Berhasil login',
                    'data' => [
                        'id' => $user_query->first()->id,
                        'nik' => $nik,
                        'name' => $user_query->first()->name,
                        'date_birth' => $user_query->first()->date_birth,
                        'gender' => $user_query->first()->gender,
                        'status' => 'visitor'
                    ]
                ], Response::HTTP_OK);
            }
            return response()->json([
                'status' => 422,
                'message' => 'nik atau password salah',
                'data' => [
                    'nik' => $nik,
                ]
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        return response()->json([
            'status' => 422,
            'message' => 'nik atau password tidak terdaftar',
            'data' => [
                'nik' => $nik,
            ]
        ], Response::HTTP_UNPROCESSABLE_ENTITY);
    }
}
