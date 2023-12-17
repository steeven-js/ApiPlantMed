<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Plant;
use Illuminate\Http\Request;

class PlantController extends Controller
{
    //
    public function index()
    {
        // On récupère tous les utilisateurs
        $plants = Plant::all();

        // On retourne les informations des utilisateurs en JSON
        return response()->json($plants);
    }

    public function show(Plant $plant)
    {
        // Je récupère la catégorie avec ses plantes
        $plant = Plant::find($plant->id);

        // Je retourne la catégorie en JSON
        return response()->json($plant);
    }
}
