<?php

namespace Database\Seeders;

use App\Models\Plant;
use Illuminate\Database\Seeder;

class PlantBooleenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sélectionne toutes les plantes
        $plants = Plant::all();

        // Booléens à activer
        $booleans = [
            'mostPopular',
            'bestSeller',
            'newArrivals',
            'recentlyViewed',
        ];

        // Mélange aléatoirement les plantes
        $shuffledPlants = $plants->shuffle();

        // Compteur pour garder trace du nombre de booléens activés
        $activatedCount = 0;

        // Parcourt les plantes
        foreach ($shuffledPlants as $plant) {
            // Si le nombre de booléens activés est égal à 10, arrête
            if ($activatedCount >= 10) {
                break;
            }

            // Choix aléatoire d'un booléen à activer
            $randomBoolean = $booleans[rand(0, 3)];

            // Vérifie si le booléen n'est pas déjà activé
            if (!$plant->{$randomBoolean}) {
                // Active le booléen
                $plant->{$randomBoolean} = true;
                // Enregistre les changements
                $plant->save();
                // Incrémente le compteur
                $activatedCount++;
            }
        }
    }
}
