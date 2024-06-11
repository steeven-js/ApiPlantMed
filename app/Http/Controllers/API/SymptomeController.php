<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Symptome;
use Illuminate\Http\Request;

class SymptomeController extends Controller
{
    public function index()
    {
        $symptomes = Symptome::with('media','plants.media')->where('is_visible', 1)->get();

        return response()->json($symptomes);
    }

    public function show(Symptome $symptome)
    {
        // Eager load the 'plants' relationship and count the number of related plants
        $symptome = Symptome::withCount(['plants' => function ($query) {
            $query->where('isActive', 1);
        }])->with(['plants' => function ($query) {
            $query->where('isActive', 1);
        }])
        ->with('media')
        ->where('is_visible', 1)
        ->find($symptome->id);

        // Load media for each plant and append it to the response
        $symptome->plants->each(function ($plant) {
            $media = $plant->getMedia('plant-images');
            $plant->media = $media;
        });

        return response()->json($symptome);
    }
}
