<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TarifTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tarifs')->delete();
        DB::table('tarifs')->insert([

            [
                'libelle' => 'J ai une residence personnelle',
                'lieu_id' => 1,
                'prix' => "0",
                'place' => "1",


            ],
            [
                'libelle' => 'Chambre double climatisée standard - Simple',
                'lieu_id' => 2,
                'prix' => "41500",
                'place' => "8",

            ],
            [
                'libelle' => 'Chambre double climatisée standard - Double',
                'lieu_id' => 2,
                'prix' => "53000",
                'place' => "8",

            ],
            [
                'libelle' => 'Chambre double climatisée privilège - Simple',
                'lieu_id' => 2,
                'prix' => "46500",
                'place' => "13",

            ],
            [
                'libelle' => 'Chambre double climatisée privilège - Double',
                'lieu_id' => 2,
                'prix' => "58000",
                'place' => "13",

            ],

            [
                'libelle' => 'Chambre double climatisée prestige - Simple',
                'lieu_id' => 2,
                'prix' => "61500",
                'place' => "10",

            ],
            [
                'libelle' => 'Chambre double climatisée prestige - Double',
                'lieu_id' => 2,
                'prix' => "73000",
                'place' => "10",

            ],
            [
                'libelle' => 'Suite royale - Simple',
                'lieu_id' => 2,
                'prix' => "106500",
                'place' => "2",

            ],
            [
                'libelle' => 'Suite royale - Double',
                'lieu_id' => 2,
                'prix' => "118000",
                'place' => "2",

            ],
            [
                'libelle' => 'Chambre double climatisée standard - Simple',
                'lieu_id' => 3,
                'prix' => "25000",
                'place' => "26",

            ],
            [
                'libelle' => 'Chambre double climatisée standard - Double',
                'lieu_id' => 3,
                'prix' => "25000",
                'place' => "26",

            ],
            [
                'libelle' => 'Chambre double climatisée prestige - Simple',
                'lieu_id' => 3,
                'prix' => "40000",
                'place' => "4",

            ],
            [
                'libelle' => 'Chambre double climatisée prestige - Double',
                'lieu_id' => 3,
                'prix' => "40000",
                'place' => "4",

            ],
            [
                'libelle' => 'Appartement 1  - Nuitée',
                'lieu_id' => 3,
                'prix' => "66500",
                'place' => "3",

            ],
            [
                'libelle' => 'Appartement 1  - Mois',
                'lieu_id' => 3,
                'prix' => "500000",
                'place' => "3",

            ],
            [
                'libelle' => 'Appartement 2  - Nuitée',
                'lieu_id' => 3,
                'prix' => "86500",
                'place' => "3",

            ],
            [
                'libelle' => 'Appartement 2  - Mois',
                'lieu_id' => 3,
                'prix' => "700000",
                'place' => "3",

            ],
            [
                'libelle' => 'Chambre double climatisée standard 1 - Simple ou Double',
                'lieu_id' => 4,
                'prix' => "24000",
                'place' => "2",

            ],

            [
                'libelle' => 'Chambre double climatisée standard 2 - Simple ou Double',
                'lieu_id' => 4,
                'prix' => "28000",
                'place' => "2",

            ],

            [
                'libelle' => 'Chambre double climatisée atchovi - Simple ou Double',
                'lieu_id' => 4,
                'prix' => "33500",
                'place' => "1",

            ],

            [
                'libelle' => 'Chambre double climatisée atcho - Simple ou Double',
                'lieu_id' => 4,
                'prix' => "40500",
                'place' => "1",

            ],

            [
                'libelle' => 'Chambre SINGLE ',
                'lieu_id' => 5,
                'prix' => "15000",
                'place' => "6",

            ],
            [
                'libelle' => 'Chambre double climatisée 1 - Simple ou Double',
                'lieu_id' => 5,
                'prix' => "20500",
                'place' => "8",

            ],
            [
                'libelle' => 'Chambre double climatisée 2 - Simple ou Double',
                'lieu_id' => 5,
                'prix' => "25000",
                'place' => "6",

            ],
            [
                'libelle' => 'Chambre double climatisée 3 - Simple ou Double',
                'lieu_id' => 5,
                'prix' => "33000",
                'place' => "10",

            ],
            [
                'libelle' => 'Résidence R+2 - 6 chambres',
                'lieu_id' => 6,
                'prix' => "150000",
                'place' => "6",

            ],

            [
                'libelle' => 'Chambre standard NOVOTEL - Simple',
                'lieu_id' => 7,
                'prix' => "133500",
                'place' => "110",

            ],

            [
                'libelle' => 'Chambre standard NOVOTEL - Double',
                'lieu_id' => 7,
                'prix' => "135000",
                'place' => "110",

            ],

            [
                'libelle' => 'Suite NOVOTEL Un salon + une chambre - Double',
                'lieu_id' => 7,
                'prix' => "230000",
                'place' => "0",

            ],

            [
                'libelle' => 'Chambre double climatisée standard IBIS - Simple',
                'lieu_id' => 7,
                'prix' => "63250",
                'place' => "101",

            ],
            [
                'libelle' => 'Chambre double climatisée standard IBIS - Double',
                'lieu_id' => 7,
                'prix' => "64750",
                'place' => "101",

            ],
        ]);
    }
}
