<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index()
    {
        // Récupérer les Plantes avec les détails des relations
        $plants = Plant::with('category', 'infos', 'proprietes', 'utilisations', 'precautions')->get();

        dd($plants->toArray());

        return view('test', [
            'plants' => $plants,
        ]);
    }
}
