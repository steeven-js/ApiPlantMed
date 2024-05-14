<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PlantController;
use App\Http\Controllers\API\SymptomeController;
use App\Http\Controllers\API\PlantWebSiteController;
use App\Http\Controllers\API\SymptomWebSiteController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource("plants", PlantController::class);
Route::apiResource("symptomes", SymptomeController::class);
Route::apiResource("plantsWebSite", PlantWebSiteController::class);
Route::apiResource("symptomsWebSite", SymptomWebSiteController::class);
