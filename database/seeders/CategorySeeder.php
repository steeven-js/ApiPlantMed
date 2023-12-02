<?php

namespace Database\Seeders;

use Str;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Liste des catégories
        /**
         * Acné
         * Allergie
         * Anémie
         * Anorexie
         * Anti-inflammatoire
         * Antiseptique
         * Anxiété
         * Aphrodisiaque
         * Arthrite
         * Asthme
         * Boulimie
         * Bronchite
         * Brûlures d'estomac
         * Burns
         * Calculs biliaires
         * Cellulite
         * Cheveux
         * Chiblains
         * Cholestérol
         * Circulation sanguine
         * Colite
         * Côlon irritable
         * Constipation
         * Cystite
         * Démangeaisons
         * Dépression
         * Dermatite
         * Diabète
         * Diarrhée
         * Douleur menstruelle
         * Elimination des toxines
         * Fatigue
         * Fertilité
         * Fièvre
         * Flatulence
         * Foie gras
         * Foie propre
         * Froid
         * Glavcome
         * Goutte
         * Grippe
         * Guérison
         * Hémorroïdes
         * Hyperhidrose
         * Hypertension
         * Hypotension
         * Indigestion
         * Infection de la gorge
         * Infection urinaire
         * Insomnie
         * Irritabilité
         * Jambes fatiguées
         * Mal de dents
         * Maladies cardiovasculaires
         * Maladie du foie
         * Maladie rhumatismale
         * Manque d'appétit
         * Mauvaise haleine
         * Maus d'estomac
         * Maux de tête
         * Ménoapuse
         * Migraine
         * Nausées
         * Nerfs
         * Névralgie
         * Pancréatite
         * Parasites intestinaux
         * Peau sèche
         * Perdre du poids
         * Pharyngite
         * Plaies dans la bouche
         * Problèmes de mémoire
         * Problèmes digestifs
         * Prostate
         * Psoriasis
         * Purifier les reins
         * Rétention d'eau
         * Salpingite
         * Sinusite
         * Spasmes intestinaux
         * Stings
         * Stress
         * Tache de peau
         * Tachycardie
         * Tendinite
         * Toux
         * Ulcère de l'estomac
         * Urétite
         * Varices
         * Vertiges
         * Viellissement
         * Vomissements
         */

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

        foreach ($categories as $index => $category) {
            Category::create([
                'name' => $category,
                'slug' => Str::slug($category),
                'position' => $index + 1, // Incrémente la position
                'is_visible' => true,
            ]);
        }
    }
}
