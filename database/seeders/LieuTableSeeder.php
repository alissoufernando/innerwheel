<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LieuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lieus')->delete();
        DB::table('lieus')->insert([

            [
                'libelle' => 'Résidence',
                'hebergement_id' => 2,
            ],

            [
                'libelle' => 'HOTEL CASA CIELO FIDJROSSE ',
                'hebergement_id' => 1,
            ],
            [
                'libelle' => 'HOTEL RESIDENCES CELINE FIDJROSSE',
                'hebergement_id' => 1,
            ],
            [
                'libelle' => 'HOTEL LA MAISON DE CANELYA',
                'hebergement_id' => 1,
            ],
            [
                'libelle' => 'RESIDENCES EASY HOTEL FIDJROSSE',
                'hebergement_id' => 2,
            ],
            [
                'libelle' => 'RESIDENCE KOUASSI',
                'hebergement_id' => 2,
            ],
            [
                'libelle' => 'HOTEL NOVOTEL/IBIS',
                'hebergement_id' => 2,
            ],

        ]);
    }
}
