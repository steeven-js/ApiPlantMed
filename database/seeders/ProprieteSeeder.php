<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProprieteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Pour chaque plante, on crée des propriétés

        // 1. On récupère toutes les plantes
        $plants = \App\Models\Plant::all();

        // 2. Pour chaque plante, on crée des infos
        foreach ($plants as $plant) {
            $faker = Faker::create('fr_FR');

            $prop = new \App\Models\Propriete();
            $prop->plant_id = $plant->id;
            $prop->propriete = $faker->unique()->word();
            $prop->save();
        }
    }
}
