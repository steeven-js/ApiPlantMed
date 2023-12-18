<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // On récupère tous les utilisateurs
        $categories = Category::with('plants')->get();

        // On retourne les informations des utilisateurs en JSON
        return response()->json($categories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        // Je récupère la catégorie avec ses plantes et le nombre de plantes
        $categoryWithPlants = Category::with('plants')->withCount('plants')->find($category->id);

        // Je retourne la catégorie avec le nombre de plantes en JSON
        return response()->json($categoryWithPlants);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
