<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Pour chaque plante, on crée des infos

        // 1. On récupère toutes les plantes
        $plants = \App\Models\Plant::all();

        // 2. Pour chaque plante, on crée des infos
        foreach ($plants as $plant) {
            // Utiliser faker pour nscient, famille, genre, description, habitat
            $faker = Faker::create('fr_FR');
            $nscient = $faker->unique()->word();
            $famille = $faker->unique()->word();
            $genre = $faker->unique()->word();
            $description = $faker->unique()->word();
            $habitat = $faker->unique()->word();

            // 2.1 On crée une info
            $info = new \App\Models\Info();
            $info->plant_id = $plant->id;
            $info->name = $plant->name; // Utilisez le nom de la plante, pas la collection de noms
            $info->nscient = $nscient;
            $info->famille = $famille;
            $info->genre = $genre;
            $info->description = $description;
            $info->habitat = $habitat;
            $info->save();
        }
    }
}
