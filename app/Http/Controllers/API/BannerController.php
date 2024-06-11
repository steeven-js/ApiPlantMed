<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        // On récupère tous les banners
        $banners = Banner::with('media')->get();

        // On retourne les informations des banners en JSON
        return response()->json($banners);
    }
}
