<?php

namespace App\Http\Controllers\API;

use App\Models\Plant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlantController extends Controller
{
    public function index()
    {
        // On récupère tous les plants
        $plants = Plant::with('media')
        ->where('isActive', 1)
        ->get();

        dd($plants);

        // On retourne les informations des plants en JSON
        return response()->json($plants);
    }

    public function show(Symptome $symptome)
    {
        // Eager load the 'plants' relationship
        $symptome = Symptome::with('plants')->where('isActive', 1)->find($symptome->id);

        // Check if $symptome is null, meaning the Symptome was not found
        if (!$symptome) {
            return response()->json(['message' => 'Symptome not found'], 404);
        }

        return response()->json($symptome);
    }

}
