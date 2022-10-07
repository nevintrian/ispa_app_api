<?php

use App\Http\Controllers\AboutAppController;
use App\Http\Controllers\AboutDiseaseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DiseaseController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\TestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/login', [LoginController::class, 'index']);
Route::apiResource('/patients', PatientController::class);
Route::apiResource('/diseases', DiseaseController::class);
Route::apiResource('/tests', TestController::class);
Route::apiResource('/about_apps', AboutAppController::class);
Route::apiResource('/about_diseases', AboutDiseaseController::class);
Route::get('/dashboard', [DashboardController::class, 'index']);
