<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModePaiementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mode_paiements')->delete();
        DB::table('mode_paiements')->insert([

            [
                'libelle' => 'Virement Bancaire',
                'piece_jointe' => 1,

            ],
            [
                'libelle' => 'Paiement en ligne',
                'piece_jointe' => 0,

            ],



        ]);
    }
}
