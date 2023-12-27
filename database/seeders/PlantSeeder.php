<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Création de 10 plantes

        // Tableau de données
        $plantes = [
            ["id" => 1, "name" => "Absinthe"],
            ["id" => 2, "name" => "Achillée"],
            ["id" => 3, "name" => "Actée à grappe"],
            ["id" => 4, "name" => "Agave"],
            ["id" => 5, "name" => "Agripaume"],
            ["id" => 6, "name" => "Aigremoine"],
            ["id" => 7, "name" => "Ail"],
            ["id" => 8, "name" => "Aloe vera"],
            ["id" => 9, "name" => "Amandier"],
            ["id" => 10, "name" => "Amarante"],
            ["id" => 11, "name" => "Aneth"],
            ["id" => 12, "name" => "Angélique"],
            ["id" => 13, "name" => "Arbre à thé"],
            ["id" => 14, "name" => "Argousier"],
            ["id" => 15, "name" => "Armoise commune"],
            ["id" => 16, "name" => "Arnica"],
            ["id" => 17, "name" => "Artichaut"],
            ["id" => 18, "name" => "Ashwagandha"],
            ["id" => 19, "name" => "Aubépine monogyne"],
            ["id" => 20, "name" => "Açaï"],
            ["id" => 21, "name" => "Badianer de Chine"],
            ["id" => 22, "name" => "Bardane"],
            ["id" => 23, "name" => "Basilic"],
            ["id" => 24, "name" => "Bistorte"],
            ["id" => 25, "name" => "Blevet"],
            ["id" => 26, "name" => "Boldo"],
            ["id" => 27, "name" => "Bougainvillea"],
            ["id" => 28, "name" => "Bouleau"],
            ["id" => 29, "name" => "Bourrache"],
            ["id" => 30, "name" => "Brocoli"],
            ["id" => 31, "name" => "Buchu"],
            ["id" => 32, "name" => "Cacao"],
            ["id" => 33, "name" => "Callune"],
            ["id" => 34, "name" => "Camomille"],
            ["id" => 35, "name" => "Cannabis"],
            ["id" => 36, "name" => "Cannelier"],
            ["id" => 37, "name" => "Cardamome"],
            ["id" => 38, "name" => "Caroubier"],
            ["id" => 39, "name" => "Centaurée rude"],
            ["id" => 40, "name" => "Centella asiatica"],
            ["id" => 41, "name" => "Chardon Marie"],
            ["id" => 42, "name" => "Chicorée"],
            ["id" => 43, "name" => "Chélidoine"],
            ["id" => 44, "name" => "Citronelle"],
            ["id" => 45, "name" => "Citronnier"],
            ["id" => 46, "name" => "Coffea"],
            ["id" => 47, "name" => "Consoude"],
            ["id" => 48, "name" => "Coquelicot"],
            ["id" => 49, "name" => "Coriandre"],
            ["id" => 50, "name" => "Cresson"],
            ["id" => 51, "name" => "Cumin"],
            ["id" => 52, "name" => "Cumin des près"],
            ["id" => 53, "name" => "Curcuma"],
            ["id" => 54, "name" => "Céleri"],
            ["id" => 55, "name" => "Damiana"],
            ["id" => 56, "name" => "Droséra"],
            ["id" => 57, "name" => "Estragon"],
            ["id" => 58, "name" => "Eucalyptus"],
            ["id" => 59, "name" => "Fenouil"],
            ["id" => 60, "name" => "Fleur d'oranger Framboisier"],
            ["id" => 61, "name" => "Fumeterre"],
            ["id" => 62, "name" => "Gattillier"],
            ["id" => 63, "name" => "Gentiana"],
            ["id" => 64, "name" => "Gimgembre"],
            ["id" => 65, "name" => "Ginkgo"],
            ["id" => 66, "name" => "Ginseng"],
            ["id" => 67, "name" => "Giroflier"],
            ["id" => 68, "name" => "Grand Plantain"],
            ["id" => 69, "name" => "Grande Aunée"],
            ["id" => 70, "name" => "Groseillier à maquereau"],
            ["id" => 71, "name" => "Guimauve"],
            ["id" => 72, "name" => "Hamamélis"],
            ["id" => 73, "name" => "Helichrysum"],
            ["id" => 74, "name" => "Hibiscus"],
            ["id" => 75, "name" => "Houblon"],
            ["id" => 76, "name" => "Ibéris amer"],
            ["id" => 77, "name" => "Jasmin"],
            ["id" => 78, "name" => "Laurier"],
            ["id" => 79, "name" => "Lavande"],
            ["id" => 80, "name" => "Lichen d'Islande"],
            ["id" => 81, "name" => "Lin"],
            ["id" => 82, "name" => "Luzerne"],
            ["id" => 83, "name" => "Malva"],
            ["id" => 84, "name" => "Manioc"],
            ["id" => 85, "name" => "Marcela"],
            ["id" => 86, "name" => "Marjolaine"],
            ["id" => 87, "name" => "Marronnier"],
            ["id" => 88, "name" => "Marrube blanc"],
            ["id" => 89, "name" => "Maté"],
            ["id" => 90, "name" => "Menthe"],
            ["id" => 91, "name" => "Menthe poivrée"],
            ["id" => 92, "name" => "Milepertuis perforé"],
            ["id" => 93, "name" => "Molène thapsus"],
            ["id" => 94, "name" => "Maringa"],
            ["id" => 95, "name" => "Myrtille"],
            ["id" => 96, "name" => "Mélisse"],
            ["id" => 97, "name" => "Noyer"],
            ["id" => 98, "name" => "Olivier"],
            ["id" => 99, "name" => "Onagre"],
            ["id" => 100, "name" => "Origan"],
            ["id" => 101, "name" => "Orthosiphon"],
            ["id" => 102, "name" => "Ortie"],
            ["id" => 103, "name" => "Oseille"],
            ["id" => 104, "name" => "Passiflora"],
            ["id" => 105, "name" => "Pensée"],
            ["id" => 106, "name" => "Persil"],
            ["id" => 107, "name" => "Pin"],
            ["id" => 108, "name" => "Pissenlit"],
            ["id" => 109, "name" => "Poivron"],
            ["id" => 110, "name" => "Pourpier"],
            ["id" => 111, "name" => "Prunellier"],
            ["id" => 112, "name" => "Prêle des champs"],
            ["id" => 113, "name" => "Pâquerette"],
            ["id" => 114, "name" => "Pérille"],
            ["id" => 115, "name" => "Romarin"],
            ["id" => 116, "name" => "Rooibos"],
            ["id" => 117, "name" => "Rosier des chiens"],
            ["id" => 118, "name" => "Rosier rouillé"],
            ["id" => 119, "name" => "Ruda"],
            ["id" => 120, "name" => "Réglisse"],
            ["id" => 121, "name" => "Safran"],
            ["id" => 122, "name" => "Salsepareille"],
            ["id" => 123, "name" => "Sarriette vivace"],
            ["id" => 124, "name" => "Sauge"],
            ["id" => 125, "name" => "Saule blanc"],
            ["id" => 126, "name" => "Serpolet"],
            ["id" => 127, "name" => "Shatavari"],
            ["id" => 128, "name" => "Soies de maïs"],
            ["id" => 129, "name" => "Souci"],
            ["id" => 130, "name" => "Stevia"],
            ["id" => 131, "name" => "Sureau"],
            ["id" => 132, "name" => "Séné"],
            ["id" => 133, "name" => "Thym"],
            ["id" => 134, "name" => "Thé"],
            ["id" => 135, "name" => "Tilia"],
            ["id" => 136, "name" => "Trèfle des prés"],
            ["id" => 137, "name" => "Tussilage"],
            ["id" => 138, "name" => "Ulmarie"],
            ["id" => 139, "name" => "Valérianne"],
            ["id" => 140, "name" => "Vanilla"],
            ["id" => 141, "name" => "Verge d'or"],
            ["id" => 142, "name" => "Verveine"],
            ["id" => 143, "name" => "Verveine citronée"],
            ["id" => 144, "name" => "Vigne"],
            ["id" => 145, "name" => "Échinacée"],
            ["id" => 146, "name" => "Épazote"],
            ["id" => 147, "name" => "Épine-vinette"]
        ];

        $precautions = ['precaution1', 'precaution2', 'precaution3'];

        $proprietes = ['proprietes1', 'proprietes2', 'proprietes3'];

        // Crér 2 usages interne et 2 usages externe
        $usages = [
            [
                'type' => 'interne',
                'value' => 'usage interne 1',
            ],
            [
                'type' => 'interne',
                'value' => 'usage interne 2',
            ],
            [
                'type' => 'externe',
                'value' => 'usage externe 1',
            ],
            [
                'type' => 'externe',
                'value' => 'usage externe 2',
            ],
        ];

        // Boucle sur le tableau de données
        foreach ($plantes as $plante) {
            // Création d'une plante
            \App\Models\Plant::create([
                'name' => $plante['name'],
                'slug' => \Illuminate\Support\Str::slug($plante['name']),
                'description' => $plante['name'] . ' description',
            ]);

            // Création de 3 précautions pour chaque plante
            for ($i = 0; $i < 3; $i++) {
                \App\Models\PlantPrecaution::create([
                    'plant_id' => $plante['id'],
                    'value' => $plante['name'] . ' ' . $precautions[$i],
                ]);
            }

            // Création de 3 propriétés pour chaque plante
            for ($i = 0; $i < 3; $i++) {
                \App\Models\PlantPropriete::create([
                    'plant_id' => $plante['id'],
                    'value' => $plante['name'] . ' ' . $proprietes[$i],
                ]);
            }

            // Création de 2 usages interne et 2 usages externe pour chaque plante
            foreach ($usages as $usage) {
                \App\Models\PlantUtilisation::create([
                    'plant_id' => $plante['id'],
                    'type' => $usage['type'],
                    'value' => $plante['name'] . ' ' . $usage['value'],
                ]);
            }
        }
    }
}
