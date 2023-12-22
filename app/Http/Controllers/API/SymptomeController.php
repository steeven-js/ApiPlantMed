<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Symptome;
use Illuminate\Http\Request;

class SymptomeController extends Controller
{
    public function index()
    {
        $symptomes = Symptome::with('plants')->paginate(10);

        return response()->json($symptomes);
    }

    public function show(Symptome $symptome)
    {
        // Eager load the 'plants' relationship and count the number of related plants
        $symptome = Symptome::withCount('plants')->with('plants')->find($symptome->id);

        return response()->json($symptome);
    }
}
