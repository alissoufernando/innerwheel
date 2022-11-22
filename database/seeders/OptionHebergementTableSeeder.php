<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OptionHebergementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('option_hebergements')->delete();
        DB::table('option_hebergements')->insert([

            [
                'libelle' => 'Simple - Nuitée',
                'tarif_id' => 1,
                'prix' => "41500",
                //'place' => "8",

            ],
            [
                'libelle' => 'Double - Nuitée',
                'tarif_id' => 1,
                'prix' => "53000",
                //'place' => "8",

            ],
            [
                'libelle' => 'Simple - Nuitée',
                'tarif_id' => 2,
                'prix' => "46500",
                //'place' => "13",

            ],
            [
                'libelle' => 'Double - Nuitée',
                'tarif_id' => 2,
                'prix' => "58000",
                //'place' => "13",

            ],

            [
                'libelle' => 'Simple - Nuitée',
                'tarif_id' => 3,
                'prix' => "61500",
                //'place' => "10",

            ],
            [
                'libelle' => 'Double - Nuitée',
                'tarif_id' => 3,
                'prix' => "73000",
                //'place' => "10",

            ],
            [
                'libelle' => 'Simple - Nuitée',
                'tarif_id' => 4,
                'prix' => "106500",
                //'place' => "2",

            ],
            [
                'libelle' => 'Double - Nuitée',
                'tarif_id' => 4,
                'prix' => "118000",
                //'place' => "2",

            ],
            [
                'libelle' => 'Simple - Nuitée',
                'tarif_id' => 5,
                'prix' => "25000",
                //'place' => "26",

            ],
            [
                'libelle' => 'Double - Nuitée',
                'tarif_id' => 5,
                'prix' => "25000",
                //'place' => "26",

            ],
            [
                'libelle' => 'Simple - Nuitée',
                'tarif_id' => 6,
                'prix' => "40000",
                //'place' => "4",

            ],
            [
                'libelle' => 'Double - Nuitée',
                'tarif_id' => 6,
                'prix' => "40000",
                //'place' => "4",

            ],
            [
                'libelle' => 'appartement - Nuitée',
                'tarif_id' => 7,
                'prix' => "66500",
                //'place' => "3",

            ],
            [
                'libelle' => 'appartement - Mois',
                'tarif_id' => 7,
                'prix' => "500000",
                //'place' => "3",

            ],
            [
                'libelle' => 'appartement - Nuitée',
                'tarif_id' => 8,
                'prix' => "86500",
                //'place' => "3",

            ],
            [
                'libelle' => 'appartement - Mois',
                'tarif_id' => 8,
                'prix' => "700000",
                //'place' => "3",

            ],
            [
                'libelle' => 'Simple - Nuitée',
                'tarif_id' => 9,
                'prix' => "24000",
                //'place' => "2",

            ],
            [
                'libelle' => 'Double - Nuitée',
                'tarif_id' => 9,
                'prix' => "24000",
                //'place' => "2",

            ],

            [
                'libelle' => 'Simple - Nuitée',
                'tarif_id' => 10,
                'prix' => "28000",
                //'place' => "2",

            ],
            [
                'libelle' => 'Double - Nuitée',
                'tarif_id' => 10,
                'prix' => "28000",
                //'place' => "2",

            ],

            [
                'libelle' => 'Double - Nuitée',
                'tarif_id' => 11,
                'prix' => "33500",
                //'place' => "1",

            ],
            [
                'libelle' => 'Simple - Nuitée',
                'tarif_id' => 11,
                'prix' => "33500",
                //'place' => "1",

            ],

            [
                'libelle' => 'Simple - Nuitée',
                'tarif_id' => 12,
                'prix' => "40500",
                //'place' => "1",

            ],
            [
                'libelle' => 'Double - Nuitée',
                'tarif_id' => 12,
                'prix' => "40500",
                //'place' => "1",

            ],

            [
                'libelle' => 'Simple - Nuitée',
                'tarif_id' => 13,
                'prix' => "15000",
                //'place' => "6",

            ],
            [
                'libelle' => 'Double - Nuitée',
                'tarif_id' => 14,
                'prix' => "20500",
                //'place' => "8",

            ],
            [
                'libelle' => 'Simple - Nuitée',
                'tarif_id' => 14,
                'prix' => "20500",
                //'place' => "8",

            ],
            [
                'libelle' => 'Double - Nuitée',
                'tarif_id' => 15,
                'prix' => "25000",
                //'place' => "6",

            ],
            [
                'libelle' => 'Simple - Nuitée',
                'tarif_id' => 15,
                'prix' => "25000",
                //'place' => "6",

            ],
            [
                'libelle' => 'Simple - Nuitée',
                'tarif_id' => 16,
                'prix' => "33000",
                //'place' => "10",

            ],
            [
                'libelle' => 'Double - Nuitée',
                'tarif_id' => 16,
                'prix' => "33000",
                //'place' => "10",

            ],
            [
                'libelle' => '6 chambres',
                'tarif_id' => 17,
                'prix' => "150000",
                //'place' => "6",

            ],

            [
                'libelle' => 'Simple - Nuitée',
                'tarif_id' => 18,
                'prix' => "133500",
                //'place' => "110",

            ],

            [
                'libelle' => 'Double - Nuitée',
                'tarif_id' => 18,
                'prix' => "135000",
                //'place' => "110",

            ],

            [
                'libelle' => 'Double - Nuitée',
                'tarif_id' => 19,
                'prix' => "230000",
                //'place' => "0",

            ],

            [
                'libelle' => 'Simple - Nuitée',
                'tarif_id' => 20,
                'prix' => "63250",
                //'place' => "101",

            ],
            [
                'libelle' => 'Double - Nuitée',
                'tarif_id' => 20,
                'prix' => "64750",
                //'place' => "101",

            ],
        ]);
    }
}
