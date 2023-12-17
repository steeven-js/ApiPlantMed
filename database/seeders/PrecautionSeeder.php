<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PrecautionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Pour chaque plante, on crée des précations

        // 1. On récupère toutes les plantes
        $plants = \App\Models\Plant::all();

        // 2. Pour chaque plante, on crée des précations
        foreach ($plants as $plant) {
            $faker = Faker::create('fr_FR');
            $precaution = new \App\Models\Precaution();
            $precaution->plant_id = $plant->id;
            $precaution->precaution = $faker->unique()->word();
            $precaution->save();
        }
    }
}
