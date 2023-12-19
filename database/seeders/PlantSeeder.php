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
        $plants = [
            [
                'id' => 1,
                'name' => 'Aloe Vera',
                'slug' => 'aloe-vera',
                'description' => 'L\'aloe vera est une plante grasse vivace cultivée dans les régions chaudes. Elle est utilisée en médecine traditionnelle depuis l\'Antiquité. Elle est également cultivée comme plante ornementale.',
            ],
            [
                'id' => 2,
                'name' => 'Basilic',
                'slug' => 'basilic',
                'description' => 'Le basilic est une plante herbacée annuelle de la famille des Lamiacées, largement cultivée comme plante aromatique et condimentaire. Ce sont des plantes herbacées, riches en huiles essentielles, aux feuilles souvent odorantes, dont certaines sont utilisées en cuisine, en phytothérapie ou en cosmétique.',
            ],
            [
                'id' => 3,
                'name' => 'Cactus',
                'slug' => 'cactus',
                'description' => 'Les cactus sont des plantes grasses ou plantes succulentes de la famille des Cactaceae. Ils sont originaires des régions arides des Amériques. Le nom vient du grec ancien κάκτος, kaktos, « chardon ».',
            ],
            [
                'id' => 4,
                'name' => 'Cerisier',
                'slug' => 'cerisier',
                'description' => 'Le cerisier est un arbre fruitier à feuilles caduques de la famille des Rosaceae. Il est originaire d\'Europe et d\'Asie Mineure. Il est cultivé pour ses fruits, les cerises, consommés frais ou utilisés dans l\'industrie agroalimentaire.',
            ],
            [
                'id' => 5,
                'name' => 'Chêne',
                'slug' => 'chene',
                'description' => 'Le chêne est un arbre du genre Quercus et de la famille des Fagaceae, présent dans les régions tempérées chaudes de l\'hémisphère nord. Les chênes sont des arbres ou des arbustes, rarement des lianes, à feuilles caduques ou persistantes, selon les espèces.',
            ],
            [
                'id' => 6,
                'name' => 'Figuier',
                'slug' => 'figuier',
                'description' => 'Le figuier est un arbre fruitier de la famille des Moraceae, originaire des régions tempérées chaudes, et des forêts tropicales humides d\'Asie du Sud-Est. Il est cultivé pour ses fruits, les figues, et comme plante ornementale.',
            ],
            [
                'id' => 7,
                'name' => 'Fougère',
                'slug' => 'fougere',
                'description' => 'Les fougères sont des plantes vasculaires qui se reproduisent par des spores. Ce sont des plantes vertes, comme les mousses et les prêles, mais à la différence de ces dernières, elles possèdent des racines, des tiges et des feuilles.',
            ],
            [
                'id' => 8,
                'name' => 'Lavande',
                'slug' => 'lavande',
                'description' => 'La lavande est un genre de plantes de la famille des Lamiaceae, qui comprend une trentaine d\'espèces réparties dans toute la région méditerranéenne et en Inde. Ce sont des plantes aromatiques, à fleurs violettes, mauves ou bleues.',
            ],
            [
                'id' => 9,
                'name' => 'Lilas',
                'slug' => 'lilas',
                'description' => 'Le lilas est un genre de plantes de la famille des Oleaceae. Il comprend des arbustes et de petits arbres, dont plusieurs espèces sont cultivées comme plantes ornementales pour leurs fleurs très parfumées.',
            ],
            [
                'id' => 10,
                'name' => 'Orchidée',
                'slug' => 'orchidee',
                'description' => 'Les orchidées sont une famille de plantes monocotylédones. C\'est l\'une des familles les plus diversifiées avec environ 30 000 espèces, réparties en 880 genres. Les orchidées sont des plantes herbacées, terrestres ou épiphytes, rarement lithophytes.',
            ],
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
        foreach ($plants as $plant) {
            // Création d'une plante
            \App\Models\Plant::create([
                'name' => $plant['name'],
                'slug' => $plant['slug'],
                'description' => $plant['description'],
            ]);

            // Création de 3 précautions pour chaque plante
            for ($i = 0; $i < 3; $i++) {
                \App\Models\PlantPrecaution::create([
                    'plant_id' => $plant['id'],
                    'value' => $plant['name'] . ' ' . $precautions[$i],
                ]);
            }

            // Création de 3 propriétés pour chaque plante
            for ($i = 0; $i < 3; $i++) {
                \App\Models\PlantPropriete::create([
                    'plant_id' => $plant['id'],
                    'value' => $plant['name'] . ' ' . $proprietes[$i],
                ]);
            }

            // Création de 2 usages interne et 2 usages externe pour chaque plante
            foreach ($usages as $usage) {
                \App\Models\PlantUtilisation::create([
                    'plant_id' => $plant['id'],
                    'type' => $usage['type'],
                    'value' => $plant['name'] . ' ' . $usage['value'],
                ]);
            }
        }
    }
}
