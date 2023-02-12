<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVisitorRequest;
use App\Http\Requests\UpdateVisitorRequest;
use App\Models\Visitor;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class VisitorController extends Controller
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
            'data' => Visitor::whereNull('result_from_disease_id')->get()
        ], Response::HTTP_OK);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function nik($nik)
    {
        return response()->json([
            'status' => 200,
            'data' => Visitor::where('nik', $nik)->whereNotNull('result_from_disease_id')->get()
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
     * @param  \App\Http\Requests\StoreVisitorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVisitorRequest $request)
    {
        $data  = [
            'name' => $request->name,
            'nik' => $request->nik,
            'gender' => $request->gender,
            'date_birth' => $request->date_birth,
            'password' => Hash::make($request->password),
        ];

        Visitor::create($data);
        return response()->json([
            'status' => 201,
            'message' => 'Berhasil daftar pengunjung',
            'data' => $request->all()
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function show(Visitor $visitor)
    {
        return response()->json([
            'status' => 200,
            'data' => Visitor::with('disease_result')->find($visitor->id)
        ], Response::HTTP_OK);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function edit(Visitor $visitor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVisitorRequest  $request
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVisitorRequest $request)
    {
        if ($request->status == "true") {
            $data  = [
                'name' => $request->name,
                'gender' => $request->gender,
                'date_birth' => $request->date_birth,
                'password' => Hash::make($request->password),
            ];
        } else {
            $data  = [
                'name' => $request->name,
                'gender' => $request->gender,
                'date_birth' => $request->date_birth,
            ];
        }

        Visitor::where('nik', $request->nik)->update($data);
        return response()->json([
            'status' => 200,
            'message' => 'Berhasil ubah profil',
            'data' => $request->all()
        ], Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visitor $visitor)
    {
        //
    }
}
