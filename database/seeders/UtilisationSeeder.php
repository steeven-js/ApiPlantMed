<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UtilisationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Pour chaque plante, on crée des utilisations

        // 1. On récupère toutes les plantes
        $plants = \App\Models\Plant::all();

        // 2. Pour chaque plante, on crée des utilisations
        foreach ($plants as $plant) {
            $faker = Faker::create('fr_FR');
            $usage = new \App\Models\Utilisation();
            $usage->plant_id = $plant->id;
            $usage->interne = $faker->unique()->word();
            $usage->externe = $faker->unique()->word();
            $usage->save();
        }
    }
}
