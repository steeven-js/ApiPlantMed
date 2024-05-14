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

Route::apiResource("plants", PlantController::class)->middleware('throttle:api_rate_limit,60,1'); // Limite de 60 requêtes par minute pour toutes les routes de PlantController
Route::apiResource("symptomes", SymptomeController::class)->middleware('throttle:api_rate_limit,60,1'); // Limite de 60 requêtes par minute pour toutes les routes de SymptomeController
Route::apiResource("plantsWebSite", PlantWebSiteController::class)->middleware('throttle:api_rate_limit,60,1'); // Limite de 60 requêtes par minute pour toutes les routes de PlantWebSiteController
Route::apiResource("symptomsWebSite", SymptomWebSiteController::class)->middleware('throttle:api_rate_limit,60,1'); // Limite de 60 requêtes par minute pour toutes les routes de SymptomWebSiteController
