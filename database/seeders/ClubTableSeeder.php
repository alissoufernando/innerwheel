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
                'pay_id' => 1,
            ],
            [
                'libelle' => 'INNER WHEEL CLUB COTONOU ESPOIR',
                'pay_id' => 1,
            ],
            [
                'libelle' => 'INNER WHEEL CLUB PORTO-NOVO',
                'pay_id' => 1,
            ],
            [
                'libelle' => 'INNER WHEEL CLUB BOHICON ETOILE',
                'pay_id' => 1,
            ],
            [
                'libelle' => 'INNER WHEEL CLUB DE BANFORA',
                'pay_id' => 2,
            ],
            [
                'libelle' => 'INNER WHEEL CLUB DE BOBO-DIOULASSO',
                'pay_id' => 2,
            ],
            [
                'libelle' => 'INNER WHEEL CLUB DE SOLEIL DE OUAGADOUGOU',
                'pay_id' => 2,
            ],
            [
                'libelle' => 'INNER WHEEL CLUB DE *ZOODO DE OUAGADOUGOU',
                'pay_id' => 2,
            ],
            [
                'libelle' => 'INNER WHEEL CLUB D’ABIDJAN',
                'pay_id' => 3,
            ],
            [
                'libelle' => 'INNER WHEEL CLUB D’ ABIDJAN II PLATEAUX',
                'pay_id' => 3,
            ],
            [
                'libelle' => 'INNER WHEEL CLUB DE CONAKRY COLOMBE',
                'pay_id' => 4,
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
                'pay_id' => 6,
            ],

            [
                'libelle' => 'INNER WHEEL CLUB Jeune Génération de Dakar Elite',
                'pay_id' => 6,
            ],
            [
                'libelle' => 'INNER WHEEL CLUB  ALINE SITOE DIATTA DE ZIGUINCHOR',
                'pay_id' => 6,
            ],
            [
                'libelle' => 'INNER WHEEL CLUB DE LOME',
                'pay_id' => 7,
            ],
            [
                'libelle' => 'INNER WHEEL CLUB DE LOME ETINCELLES',
                'pay_id' => 7,
            ],
            [
                'libelle' => 'INNER WHEEL CLUB DE Cameroun',
                'pay_id' => 8,
            ],
            [
                'libelle' => 'INNER WHEEL CLUB DE LA RDC',
                'pay_id' => 9,
            ],
            [
                'libelle' => 'INNER WHEEL CLUB DE Nigéria',
                'pay_id' => 10,
            ],
            [
                'libelle' => 'INNER WHEEL CLUB DE LA France',
                'pay_id' => 11,
            ],

        ]);
    }
}
