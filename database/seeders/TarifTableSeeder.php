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
                'hebergement_id' => 3,
                'prix' => "0",


            ],
            [
                'libelle' => 'Villa',
                'hebergement_id' => 1,
                'prix' => "0",

            ],
            [
                'libelle' => 'HOTEL CASA CIELO FIDJROSSE - Chambre double climatisée standard - Simple',
                'hebergement_id' => 2,
                'prix' => "40000",
            ],
            [
                'libelle' => 'HOTEL CASA CIELO FIDJROSSE - Chambre double climatisée standard - Double',
                'hebergement_id' => 2,
                'prix' => "50000",
            ],
            [
                'libelle' => 'HOTEL CASA CIELO FIDJROSSE - Chambre double climatisée privilège - Simple',
                'hebergement_id' => 2,
                'prix' => "45000",
            ],
            [
                'libelle' => 'HOTEL CASA CIELO FIDJROSSE - Chambre double climatisée privilège - Double',
                'hebergement_id' => 2,
                'prix' => "55000",
            ],

            [
                'libelle' => 'HOTEL CASA CIELO FIDJROSSE - Chambre double climatisée prestige - Simple',
                'hebergement_id' => 2,
                'prix' => "60000",
            ],
            [
                'libelle' => 'HOTEL CASA CIELO FIDJROSSE - Chambre double climatisée prestige - Double',
                'hebergement_id' => 2,
                'prix' => "70000",
            ],
            [
                'libelle' => 'HOTEL CASA CIELO FIDJROSSE - Suite royale - Simple',
                'hebergement_id' => 2,
                'prix' => "105000",
            ],
            [
                'libelle' => 'HOTEL CASA CIELO FIDJROSSE - Suite royale - Double',
                'hebergement_id' => 2,
                'prix' => "115000",
            ],
            [
                'libelle' => 'HOTEL RESIDENCES CELINE FIDJROSSE  - Chambre double climatisée standard - Simple',
                'hebergement_id' => 2,
                'prix' => "25000",
            ],
            [
                'libelle' => 'HOTEL RESIDENCES CELINE FIDJROSSE  - Chambre double climatisée standard - Double',
                'hebergement_id' => 2,
                'prix' => "25000",
            ],
            [
                'libelle' => 'HOTEL RESIDENCES CELINE FIDJROSSE  - Chambre double climatisée prestige - Simple',
                'hebergement_id' => 2,
                'prix' => "40000",
            ],
            [
                'libelle' => 'HOTEL RESIDENCES CELINE FIDJROSSE  - Chambre double climatisée prestige - Double',
                'hebergement_id' => 2,
                'prix' => "40000",
            ],
            [
                'libelle' => 'HOTEL RESIDENCES CELINE FIDJROSSE  - Appartement 1  - Nuitée',
                'hebergement_id' => 2,
                'prix' => "66500",
            ],
            [
                'libelle' => 'HOTEL RESIDENCES CELINE FIDJROSSE  - Appartement 1  - Mois',
                'hebergement_id' => 2,
                'prix' => "500000",
            ],
            [
                'libelle' => 'HOTEL RESIDENCES CELINE FIDJROSSE  - Appartement 2  - Nuitée',
                'hebergement_id' => 2,
                'prix' => "86500",
            ],
            [
                'libelle' => 'HOTEL RESIDENCES CELINE FIDJROSSE  - Appartement 2  - Mois',
                'hebergement_id' => 2,
                'prix' => "700000",
            ],
            [
                'libelle' => 'LA MAISON DE CANELYA - Chambre double climatisée standard 1 - Simple ou Double',
                'hebergement_id' => 4,
                'prix' => "24000",
            ],

            [
                'libelle' => 'LA MAISON DE CANELYA - Chambre double climatisée standard 2 - Simple ou Double',
                'hebergement_id' => 4,
                'prix' => "28000",
            ],

            [
                'libelle' => 'LA MAISON DE CANELYA - Chambre double climatisée atchovi - Simple ou Double',
                'hebergement_id' => 4,
                'prix' => "33500",
            ],

            [
                'libelle' => 'LA MAISON DE CANELYA - Chambre double climatisée atcho - Simple ou Double',
                'hebergement_id' => 4,
                'prix' => "40500",
            ],

            [
                'libelle' => 'RESIDENCES EASY HOTEL FIDJROSSE - Chambre SINGLE ',
                'hebergement_id' => 2,
                'prix' => "15000",
            ],
            [
                'libelle' => 'RESIDENCES EASY HOTEL FIDJROSSE - Chambre double climatisée 1 - Simple ou Double',
                'hebergement_id' => 2,
                'prix' => "20500",
            ],
            [
                'libelle' => 'RESIDENCES EASY HOTEL FIDJROSSE - Chambre double climatisée 2 - Simple ou Double',
                'hebergement_id' => 2,
                'prix' => "33000",
            ],
            [
                'libelle' => 'RESIDENCES EASY HOTEL FIDJROSSE - Chambre double climatisée 3 - Simple ou Double',
                'hebergement_id' => 2,
                'prix' => "33000",
            ],
            [
                'libelle' => 'RESIDENCE KOUASSI - Résidence R+2 - 6 chambres',
                'hebergement_id' => 3,
                'prix' => "150000",
            ],

            [
                'libelle' => 'HOTEL NOVOTEL/IBIS  - Chambre standard NOVOTEL - Simple ou Double',
                'hebergement_id' => 2,
                'prix' => "131000",
            ],

            [
                'libelle' => 'HOTEL NOVOTEL/IBIS  - Suite NOVOTEL Un salon + une chambre - Double',
                'hebergement_id' => 2,
                'prix' => "225000",
            ],

            [
                'libelle' => 'HOTEL NOVOTEL/IBIS  - Chambre double climatisée standard IBIS - Simple ou Double',
                'hebergement_id' => 2,
                'prix' => "61750",
            ],



        ]);
    }
}
