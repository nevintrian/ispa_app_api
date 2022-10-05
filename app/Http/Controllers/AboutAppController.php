<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAboutAppRequest;
use App\Http\Requests\UpdateAboutAppRequest;
use App\Models\AboutApp;
use Database\Factories\AboutAppFactory;
use Illuminate\Http\Response;

class AboutAppController extends Controller
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
            'data' => AboutApp::all()
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
     * @param  \App\Http\Requests\StoreAboutAppRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAboutAppRequest $request)
    {
        $data  = [
            'title' => $request->title,
            'description' => $request->description,
        ];

        AboutApp::create($data);

        return response()->json([
            'status' => 201,
            'message' => 'Berhasil tambah data tentang aplikasi',
            'data' => $data
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AboutApp  $aboutApp
     * @return \Illuminate\Http\Response
     */
    public function show(AboutApp $aboutApp)
    {
        return response()->json([
            'status' => 200,
            'data' => AboutApp::find($aboutApp->id)
        ], Response::HTTP_OK);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AboutApp  $aboutApp
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutApp $aboutApp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAboutAppRequest  $request
     * @param  \App\Models\AboutApp  $aboutApp
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAboutAppRequest $request, AboutApp $aboutApp)
    {
        $data  = [
            'title' => $request->title,
            'description' => $request->description,
        ];
        AboutApp::find($aboutApp->id)->update($data);

        return response()->json([
            'status' => 200,
            'message' => 'Berhasil ubah data tentang aplikasi',
            'data' => $data
        ], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutApp  $aboutApp
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutApp $aboutApp)
    {
        AboutApp::destroy($aboutApp->id);

        return response()->json([
            'status' => 200,
            'message' => 'Berhasil hapus data tentang aplikasi',
        ], Response::HTTP_OK);
    }
}
