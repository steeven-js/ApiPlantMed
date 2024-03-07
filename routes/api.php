<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PlantController;
use App\Http\Controllers\API\SymptomeController;
use App\Http\Controllers\API\PlantWebSiteController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Register API routes for the application. These routes are loaded by the
| RouteServiceProvider and assigned to the "api" middleware group.
|
*/

// Authentication Middleware
Route::middleware('auth:sanctum')->group(function () {
    // Protected Routes
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    // API Resource Routes
    Route::apiResource("plants", PlantController::class);
    Route::apiResource("plantsWebSite", PlantWebSiteController::class);

    Route::apiResource("symptoms", SymptomeController::class);
});

// Public Routes (no authentication required)
Route::get('/public-endpoint', function () {
    return response()->json(['message' => 'This is a public endpoint. No authentication required.']);
});

// Route::apiResource("plants", PlantController::class);
// Route::apiResource("plantsWebSite", PlantWebSiteController::class);

// Route::apiResource("symptoms", SymptomeController::class);
