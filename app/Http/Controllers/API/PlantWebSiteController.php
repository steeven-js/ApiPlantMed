<?php

namespace App\Http\Controllers\API;

use App\Models\Plant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlantWebSiteController extends Controller
{
    public function index()
    {
        // On récupère tous les plants avec pagination
        $plants = Plant::with('media')
            ->where('isActive', 1)
            ->paginate(12);

        // On retourne les informations des plants en JSON
        return response()->json($plants);
    }


    public function show(Plant $plant)
    {
        // Je récupère le plant avec ses informations
        $plant = Plant::with('proprietes', 'precautions', 'utilisations', 'precautions', 'media')
            ->where('isActive', 1)
            ->find($plant->id);

        // Je retourne le plant en JSON
        return response()->json($plant);
    }
}
