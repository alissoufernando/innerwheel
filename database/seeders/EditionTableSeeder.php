<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EditionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('editions')->insert([
            //Appel Offre
            [
                'libelle' => 'Notre theme de l année',
                'annee' => '2022-2023',
                'statut' => 1,
            ],

        ]);
    }
}
