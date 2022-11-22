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
                'libelle' => 'Chambre double climatisée standard',
                'lieu_id' => 2,
                //'prix' => "41500",
                'place' => "8",
                'placeI' => "8",


            ],


            [
                'libelle' => 'Chambre double climatisée privilège',
                'lieu_id' => 2,
                //'prix' => "46500",
                'place' => "13",
                'placeI' => "13",

            ],


            [
                'libelle' => 'Chambre double climatisée prestige',
                'lieu_id' => 2,
                //'prix' => "61500",
                'place' => "10",
                'placeI' => "10",

            ],


            [
                'libelle' => 'Suite royale',
                'lieu_id' => 2,
                //'prix' => "118000",
                'place' => "2",
                'placeI' => "2",

            ],
            [
                'libelle' => 'Chambre double climatisée standard',
                'lieu_id' => 3,
                //'prix' => "25000",
                'place' => "26",
                'placeI' => "26",

            ],

            [
                'libelle' => 'Chambre double climatisée prestige',
                'lieu_id' => 3,
                //'prix' => "40000",
                'place' => "4",
                'placeI' => "4",

            ],

            [
                'libelle' => 'Appartement 1',
                'lieu_id' => 3,
                //'prix' => "66500",
                'place' => "3",
                'placeI' => "3",

            ],


            [
                'libelle' => 'Appartement 2',
                'lieu_id' => 3,
                //'prix' => "700000",
                'place' => "3",
                'placeI' => "3",

            ],
            [
                'libelle' => 'Chambre double climatisée standard 1',
                'lieu_id' => 4,
                //'prix' => "24000",
                'place' => "2",
                'placeI' => "2",

            ],

            [
                'libelle' => 'Chambre double climatisée standard 2',
                'lieu_id' => 4,
                //'prix' => "28000",
                'place' => "2",
                'placeI' => "2",

            ],

            [
                'libelle' => 'Chambre double climatisée atchovi',
                'lieu_id' => 4,
                //'prix' => "33500",
                'place' => "1",
                'placeI' => "1",

            ],

            [
                'libelle' => 'Chambre double climatisée atcho',
                'lieu_id' => 4,
                //'prix' => "40500",
                'place' => "1",
                'placeI' => "1",

            ],

            [
                'libelle' => 'Chambre SINGLE ',
                'lieu_id' => 5,
                //'prix' => "15000",
                'place' => "6",
                'placeI' => "6",

            ],
            [
                'libelle' => 'Chambre double climatisée 1',
                'lieu_id' => 5,
                //'prix' => "20500",
                'place' => "8",
                'placeI' => "8",

            ],
            [
                'libelle' => 'Chambre double climatisée 2',
                'lieu_id' => 5,
                //'prix' => "25000",
                'place' => "6",
                'placeI' => "6",

            ],
            [
                'libelle' => 'Chambre double climatisée 3',
                'lieu_id' => 5,
                //'prix' => "33000",
                'place' => "10",
                'placeI' => "10",

            ],
            [
                'libelle' => 'Résidence R+2',
                'lieu_id' => 6,
                //'prix' => "150000",
                'place' => "6",
                'placeI' => "6",

            ],

            [
                'libelle' => 'Chambre standard NOVOTEL',
                'lieu_id' => 7,
                //'prix' => "133500",
                'place' => "110",
                'placeI' => "110",

            ],

            [
                'libelle' => 'Suite NOVOTEL Un salon + une chambre',
                'lieu_id' => 7,
                //'prix' => "230000",
                'place' => "0",
                'placeI' => "0",

            ],

            [
                'libelle' => 'Chambre double climatisée standard IBIS',
                'lieu_id' => 7,
                //'prix' => "63250",
                'place' => "101",
                'placeI' => "101",

            ],

        ]);
    }
}
