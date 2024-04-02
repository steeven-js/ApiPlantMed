<?php

namespace Database\Seeders;

use App\Models\Plant;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PlantActiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sélectionne toutes les plantes
        $plants = Plant::all();

        // Parcourt les plantes
        foreach ($plants as $plant) {
            // Définit isActive à true pour chaque plante
            $plant->isActive = true;
            // Enregistre les changements
            $plant->save();
        }
    }
}
