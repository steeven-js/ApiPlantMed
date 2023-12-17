<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Plant;
use Illuminate\Http\Request;

class PlantController extends Controller
{
    public function index()
    {
        // On récupère tous les plants
        $plants = Plant::all();

        // On retourne les informations des plants en JSON
        return response()->json($plants);
    }

    public function show(Plant $plant)
    {
        // Je récupère le plant avec ses informations
        $plant = Plant::with('infos', 'proprietes', 'utilisations', 'precautions')->find($plant->id);

        // Je retourne le plant en JSON
        return response()->json($plant);
    }
}
