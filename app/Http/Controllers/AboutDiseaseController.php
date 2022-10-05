<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAboutDiseaseRequest;
use App\Http\Requests\UpdateAboutDiseaseRequest;
use App\Models\AboutDisease;
use Illuminate\Http\Response;

class AboutDiseaseController extends Controller
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
            'data' => AboutDisease::all()
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
     * @param  \App\Http\Requests\StoreAboutDiseaseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAboutDiseaseRequest $request)
    {
        $data  = [
            'title' => $request->title,
            'description' => $request->description,
        ];

        AboutDisease::create($data);

        return response()->json([
            'status' => 201,
            'message' => 'Berhasil tambah data tentang ispa',
            'data' => $data
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AboutDisease  $aboutDisease
     * @return \Illuminate\Http\Response
     */
    public function show(AboutDisease $aboutDisease)
    {
        return response()->json([
            'status' => 200,
            'data' => AboutDisease::find($aboutDisease->id)
        ], Response::HTTP_OK);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AboutDisease  $aboutDisease
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutDisease $aboutDisease)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAboutDiseaseRequest  $request
     * @param  \App\Models\AboutDisease  $aboutDisease
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAboutDiseaseRequest $request, AboutDisease $aboutDisease)
    {
        $data  = [
            'title' => $request->title,
            'description' => $request->description,
        ];
        AboutDisease::find($aboutDisease->id)->update($data);

        return response()->json([
            'status' => 200,
            'message' => 'Berhasil ubah data tentang ispa',
            'data' => $data
        ], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutDisease  $aboutDisease
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutDisease $aboutDisease)
    {
        AboutDisease::destroy($aboutDisease->id);

        return response()->json([
            'status' => 200,
            'message' => 'Berhasil hapus data tentang ispa',
        ], Response::HTTP_OK);
    }
}
