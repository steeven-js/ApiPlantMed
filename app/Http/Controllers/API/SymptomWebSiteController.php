<?php

namespace App\Http\Controllers\API;

use App\Models\Symptome;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SymptomWebSiteController extends Controller
{
    public function index()
    {
        // On récupère tous les plants avec pagination
        $plants = Symptome::with('media')
            ->where('is_visible', 1)
            ->paginate(12);

        // On retourne les informations des plants en JSON
        return response()->json($plants);
    }


    public function show(Symptome $plant)
    {
        // Je récupère le plant avec ses informations
        $plant = Symptome::with('media')
            ->where('is_visible', 1)
            ->find($plant->id);

        // Je retourne le plant en JSON
        return response()->json($plant);
    }
}
