<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClubTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clubs')->delete();
        DB::table('clubs')->insert([

            [
                'libelle' => 'INNER WHEEL CLUB DE COTONOU',
                'pay_id' => 5,
            ],
            [
                'libelle' => 'INNER WHEEL CLUB COTONOU ESPOIR',
                'pay_id' => 5,
            ],
            [
                'libelle' => 'INNER WHEEL CLUB PORTO-NOVO',
                'pay_id' => 5,
            ],
            [
                'libelle' => 'INNER WHEEL CLUB BOHICON ETOILE',
                'pay_id' => 5,
            ],
            [
                'libelle' => 'INNER WHEEL CLUB DE BANFORA',
                'pay_id' => 5,
            ],
            [
                'libelle' => 'INNER WHEEL CLUB DE BOBO-DIOULASSO',
                'pay_id' => 5,
            ],
            [
                'libelle' => 'INNER WHEEL CLUB DE SOLEIL DE OUAGADOUGOU',
                'pay_id' => 5,
            ],
            [
                'libelle' => 'INNER WHEEL CLUB DE *ZOODO DE OUAGADOUGOU',
                'pay_id' => 5,
            ],
            [
                'libelle' => 'INNER WHEEL CLUB D’ABIDJAN',
                'pay_id' => 5,
            ],
            [
                'libelle' => 'INNER WHEEL CLUB D’ ABIDJAN II PLATEAUX',
                'pay_id' => 5,
            ],
            [
                'libelle' => 'INNER WHEEL CLUB DE CONAKRY COLOMBE',
                'pay_id' => 5,
            ],
            [
                'libelle' => 'INNER WHEEL CLUB DE BAMAKO AMITIE',
                'pay_id' => 5,
            ],
            [
                'libelle' => 'INNER WHEEL CLUB DE BAMAKO KOULOUBA',
                'pay_id' => 5,
            ],
            [
                'libelle' => 'INNER WHEEL CLUB DE DAKAR TERRANGA',
                'pay_id' => 5,
            ],

            [
                'libelle' => 'INNER WHEEL CLUB Jeune Génération de Dakar Elite',
                'pay_id' => 5,
            ],
            [
                'libelle' => 'INNER WHEEL CLUB  ALINE SITOE DIATTA DE ZIGUINCHOR',
                'pay_id' => 5,
            ],
            [
                'libelle' => 'INNER WHEEL CLUB DE LOME',
                'pay_id' => 5,
            ],
            [
                'libelle' => 'INNER WHEEL CLUB DE LOME ETINCELLES',
                'pay_id' => 5,
            ],

        ]);
    }
}
