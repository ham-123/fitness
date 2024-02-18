<?php

namespace Database\Seeders;

use App\Models\Cours;
use App\Models\TypeAbonnement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeAbonnementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cours = Cours::all();

        TypeAbonnement::create([
            'type' => 'GROUPE',
            'periode' => 'JOUR',
            'prix' => 2000,
            'cours_id' => $cours->random()->id,
        ]);

        TypeAbonnement::create([
            'type' => 'GROUPE',
            'periode' => 'SEMAINE',
            'prix' => 10000,
            'cours_id' => $cours->random()->id,
        ]);

        TypeAbonnement::create([
            'type' => 'GROUPE',
            'periode' => 'MOIS',
            'prix' => 30000,
            'cours_id' => $cours->random()->id,
        ]);

        $cours1 = Cours::find(6);
        TypeAbonnement::create([
            'type' => 'PERSONNEL',
            'periode' => 'MOIS',
            'prix' => 35000,
            'cours_id' => $cours1->id,
        ]);

        $cours2 = Cours::find(7);
        TypeAbonnement::create([
            'type' => 'PERSONNEL',
            'periode' => 'MOIS',
            'prix' => 25000,
            'cours_id' => $cours2->id,
        ]);
        $cours3 = Cours::find(8);
        TypeAbonnement::create([
            'type' => 'PERSONNEL',
            'periode' => 'MOIS',
            'prix' => 20000,
            'cours_id' => $cours3->id,
        ]);

        $cours4 = Cours::find(9);
        TypeAbonnement::create([
            'type' => 'PERSONNEL',
            'periode' => 'MOIS',
            'prix' => 27000,
            'cours_id' => $cours4->id,
        ]);
        $cours5 = Cours::find(10);
        TypeAbonnement::create([
            'type' => 'PERSONNEL',
            'periode' => 'MOIS',
            'prix' => 30000,
            'cours_id' => $cours5->id,
        ]);

        $cours6 = Cours::find(13);
        TypeAbonnement::create([
            'type' => 'PERSONNEL',
            'periode' => 'MOIS',
            'prix' => 15000,
            'cours_id' => $cours6->id,
        ]);
    }
}
