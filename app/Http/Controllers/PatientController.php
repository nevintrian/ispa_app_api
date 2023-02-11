<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePatientRequest;
use App\Http\Requests\UpdatePatientRequest;
use App\Imports\PatientImport;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Maatwebsite\Excel\Facades\Excel;

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
            'data' => Patient::with('disease_label')->get()
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
            'age_year' => $request->age_year ?? '',
            'age_month' => $request->age_month ?? '',
            'date_birth' => $request->date_birth,
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
            'data' => Patient::with('disease_label')->find($patient->id)
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
            'age_year' => $request->age_year ?? '',
            'age_month' => $request->age_month ?? '',
            'date_birth' => $request->date_birth,
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

    public function import()
    {
        Excel::import(new PatientImport, public_path('excel/patient_data.xlsx'));

        return response()->json([
            'status' => 200,
            'message' => 'Berhasil import data pasien',
        ], Response::HTTP_OK);
    }
}
