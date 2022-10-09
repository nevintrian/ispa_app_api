<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePatientRequest;
use App\Http\Requests\UpdatePatientRequest;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PatientController extends Controller
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
            'data' => Patient::with('disease')->get()
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
     * @param  \App\Http\Requests\StorePatientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePatientRequest $request)
    {
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
            'label_from_disease_id' => $request->label_from_disease_id
        ];

        Patient::create($data);

        return response()->json([
            'status' => 201,
            'message' => 'Berhasil tambah data pasien',
            'data' => $data
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        return response()->json([
            'status' => 200,
            'data' => Patient::find($patient->id)
        ], Response::HTTP_OK);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePatientRequest  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePatientRequest $request, Patient $patient)
    {
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
            'label_from_disease_id' => $request->label_from_disease_id
        ];
        Patient::find($patient->id)->update($data);

        return response()->json([
            'status' => 200,
            'message' => 'Berhasil ubah data pasien',
            'data' => $data
        ], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        Patient::destroy($patient->id);

        return response()->json([
            'status' => 200,
            'message' => 'Berhasil hapus data pasien',
        ], Response::HTTP_OK);
    }
}
