<?php

namespace Database\Seeders;

use App\Models\Symptome;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SymptomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Liste des symptômes
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

        $symptomes = [
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

        foreach ($symptomes as $index => $symptome) {
            Symptome::create([
                'name' => $symptome,
                'slug' => Str::slug($symptome),
                'is_visible' => true,
            ]);
        }
    }
}
