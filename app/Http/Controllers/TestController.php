<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTestRequest;
use App\Http\Requests\UpdateTestRequest;
use App\Models\Test;
use Illuminate\Http\Response;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'status' => 200,
            'data' => Test::all()
        ], Response::HTTP_OK);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTestRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTestRequest $request)
    {
        $data  = [
            'x1' => $request->x1,
            'x2' => $request->x2,
            'x3' => $request->x3,
            'x4' => $request->x4,
            'x5' => $request->x5,
            'x6' => $request->x6,
            'x7' => $request->x7,
            'x8' => $request->x8,
            'x9' => $request->x9,
            'label_from_disease_id' => $request->label_from_disease_id,
            'result_from_disease_id' => $request->result_from_disease_id
        ];

        Test::create($data);

        return response()->json([
            'status' => 201,
            'message' => 'Berhasil tambah data tes',
            'data' => $data
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function show(Test $test)
    {
        return response()->json([
            'status' => 200,
            'data' => Test::find($test->id)
        ], Response::HTTP_OK);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function edit(Test $test)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTestRequest  $request
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTestRequest $request, Test $test)
    {
        $data  = [
            'x1' => $request->x1,
            'x2' => $request->x2,
            'x3' => $request->x3,
            'x4' => $request->x4,
            'x5' => $request->x5,
            'x6' => $request->x6,
            'x7' => $request->x7,
            'x8' => $request->x8,
            'x9' => $request->x9,
            'label_from_disease_id' => $request->label_from_disease_id,
            'result_from_disease_id' => $request->result_from_disease_id
        ];
        Test::find($test->id)->update($data);

        return response()->json([
            'status' => 200,
            'message' => 'Berhasil ubah data tes',
            'data' => $data
        ], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy(Test $test)
    {
        Test::destroy($test->id);

        return response()->json([
            'status' => 200,
            'message' => 'Berhasil hapus data tes',
        ], Response::HTTP_OK);
    }
}
