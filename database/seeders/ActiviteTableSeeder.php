<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActiviteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activites')->insert([
            //Appel Offre
            [
                'libelle' => 'Inscriptions',
                'prix' => "25000",
                'edition_id' => 1,
                'obligatoire' => 1,

            ],
            [
                'libelle' => 'Gala',
                'prix' => "25000",
                'edition_id' => 1,
                'obligatoire' => 1,

            ],
            [
                'libelle' => 'Visite Touristique',
                'prix' => "10000",
                'edition_id' => 1,
                'obligatoire' => 0,

            ],
            [
                'libelle' => 'Marché Dantokpa',
                'prix' => "0",
                'edition_id' => 1,
                'obligatoire' => 0,

            ],
            [
                'libelle' => 'Aucune',
                'prix' => "0",
                'edition_id' => 1,
                'obligatoire' => 0,

            ],
        ]);
    }
}
