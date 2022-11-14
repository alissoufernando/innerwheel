<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HebergementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hebergements')->delete();
        DB::table('hebergements')->insert([

            [
                'libelle' => 'Villa',
                'edition_id' => 1,
            ],
            [
                'libelle' => 'Hôtel',
                'edition_id' => 1,
            ],
            [
                'libelle' => 'Résidence',
                'edition_id' => 1,
            ],
            [
                'libelle' => 'Maison',
                'edition_id' => 1,
            ],

        ]);
    }
}
