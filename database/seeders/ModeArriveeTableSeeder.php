<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModeArriveeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mode_arrivees')->delete();
        DB::table('mode_arrivees')->insert([

            [
                'libelle' => 'Avion',
            ],
            [
                'libelle' => 'Terrestre',

            ],
        ]);
    }
}
