<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class PlantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Liste de mes catégories
        $categories = [
            'Acné', 'Allergie', 'Anémie', 'Anorexie', 'Anti-inflammatoire', 'Antiseptique', 'Anxiété', 'Aphrodisiaque',
            'Arthrite', 'Asthme', 'Boulimie', 'Bronchite', 'Brûlures d\'estomac', 'Burns', 'Calculs biliaires', 'Cellulite',
            'Cheveux', 'Chiblains', 'Cholestérol', 'Circulation sanguine', 'Colite', 'Côlon irritable', 'Constipation',
            'Cystite', 'Démangeaisons', 'Dépression', 'Dermatite', 'Diabète', 'Diarrhée', 'Douleur menstruelle',
            'Elimination des toxines', 'Fatigue', 'Fertilité', 'Fièvre', 'Flatulence', 'Foie gras', 'Foie propre', 'Froid',
            'Glavcome', 'Goutte', 'Grippe', 'Guérison', 'Hémorroïdes', 'Hyperhidrose', 'Hypertension', 'Hypotension',
            'Indigestion', 'Infection de la gorge', 'Infection urinaire', 'Insomnie', 'Irritabilité', 'Jambes fatiguées',
            'Mal de dents', 'Maladies cardiovasculaires', 'Maladie du foie', 'Maladie rhumatismale', 'Manque d\'appétit',
            'Mauvaise haleine', 'Maus d\'estomac', 'Maux de tête', 'Ménoapuse', 'Migraine', 'Nausées', 'Nerfs', 'Névralgie',
            'Pancréatite', 'Parasites intestinaux', 'Peau sèche', 'Perdre du poids', 'Pharyngite', 'Plaies dans la bouche',
            'Problèmes de mémoire', 'Problèmes digestifs', 'Prostate', 'Psoriasis', 'Purifier les reins', 'Rétention d\'eau',
            'Salpingite', 'Sinusite', 'Spasmes intestinaux', 'Stings', 'Stress', 'Tache de peau', 'Tachycardie', 'Tendinite',
            'Toux', 'Ulcère de l\'estomac', 'Urétite', 'Varices', 'Vertiges', 'Viellissement', 'Vomissements',
        ];

        // Pour chaque catégorie, je crée une plante avec la relation category_id
        // Nom de la plante : 'Plante' + ID de la plante

        foreach ($categories as $category) {
            $categoryId = \App\Models\Category::where('name', $category)->first()->id;

            \App\Models\Plant::create([
                'category_id' => $categoryId,
                'name' => 'Plante-' . $categoryId,
                'slug' => Str::slug('Plante-' . $categoryId),
            ]);
        }
    }
}
