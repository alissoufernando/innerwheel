<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuts')->delete();
        DB::table('statuts')->insert([

            [
                'libelle' => 'Rejeté',
            ],
            [
                'libelle' => 'En cours de traitement',
            ],
            [
                'libelle' => 'Validé',
            ],
        ]);
    }
}
