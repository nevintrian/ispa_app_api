<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use App\Models\Patient;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Phpml\Classification\NaiveBayes;

class TestHomeController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTestRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $classifier = new NaiveBayes();
        $samples = [];
        $labels = [];
        $patients = Patient::all();
        foreach ($patients as $key => $value) {
            $sample = [];
            for ($i = 1; $i <= 9; $i++) {
                $x = "x" . $i;
                array_push($sample, $value->$x);
            }
            array_push($samples, $sample);
            array_push($labels, $value->label_from_disease_id);
        }
        $classifier->train($samples, $labels);


        $predicts = [];
        $predict = [];
        for ($i = 1; $i <= 9; $i++) {
            $x = "x" . $i;
            array_push($predict, $request->$x);
        }
        array_push($predicts, $predict);

        $result = $classifier->predict($predicts)[0];
        $disease_result = Disease::find($result);

        $data  = [
            'name' => $request->name,
            'gender' => $request->gender,
            'age' => $request->age,
            'x1' => $request->x1,
            'x2' => $request->x2,
            'x3' => $request->x3,
            'x4' => $request->x4,
            'x5' => $request->x5,
            'x6' => $request->x6,
            'x7' => $request->x7,
            'x8' => $request->x8,
            'x9' => $request->x9,
            'result_from_disease_id' => $result,
            'disease_result' => $disease_result
        ];

        return response()->json([
            'status' => 200,
            'message' => 'Berhasil deteksi ISPA',
            'data' => $data
        ], Response::HTTP_OK);
    }
}
