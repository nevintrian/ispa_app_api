<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Test;
use Illuminate\Http\Response;

class DashboardController extends Controller
{
    public function index()
    {
        $correct = Test::where('is_correct', 1)->count();
        $all = Test::count();
        $all != 0 ?  $accuracy = ($correct / $all) * 100 : $accuracy = 0;

        return response()->json([
            'status' => 200,
            'data' => [
                'accuracy' => round($accuracy) . '%',
                'total_patient' => Patient::count(),
                'total_test' => Test::count()
            ]
        ], Response::HTTP_OK);
    }
}
