<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Symptome;
use App\Models\Plant;
use App\Models\SymptomePlant;

class SymptomePlantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Retrieve all Symptome and Plant records
        $symptomes = Symptome::all();
        $plants = Plant::all();

        // Seed SymptomePlant table
        foreach ($plants as $plant) {
            // Get a random number of symptoms to associate with each plant
            $randomNumberOfSymptoms = rand(1, 15);
            $randomSymptoms = $symptomes->random($randomNumberOfSymptoms);

            // Associate each random symptom with the current plant
            foreach ($randomSymptoms as $symptome) {
                SymptomePlant::create([
                    'symptome_id' => $symptome->id,
                    'plant_id' => $plant->id,
                ]);
            }
        }
    }
}
