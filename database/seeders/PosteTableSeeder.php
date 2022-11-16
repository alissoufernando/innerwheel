<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PosteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('postes')->delete();
        DB::table('postes')->insert([

            [
                'libelle' => 'Présidente',
            ],

            [
                'libelle' => 'Vice-présidente',
            ],
            [
                'libelle' => 'Trésorière',
            ],
            [
                'libelle' => 'Trésorière Adjointe',
            ],
            [
                'libelle' => 'Secrétaire',
            ],
            [
                'libelle' => 'Secrétaire adjointe',
            ],
            [
                'libelle' => 'Protocole',
            ],
            [
                'libelle' => 'Responsable Relations internationales',
            ],
            [
                'libelle' => 'Editrice/ internet',
            ],
            [
                'libelle' => 'PDG',
            ],
            [
                'libelle' => 'Gouverneur du district',
            ],
            [
                'libelle' => 'Vice-Gouverneur du district',
            ],
            [
                'libelle' => 'Past Présidente',
            ],
            [
                'libelle' => 'Immediat Past Présidente',
            ],
            [
                'libelle' => 'Membre',
            ],
            [
                'libelle' => 'Représentante Nationale',
            ],
            [
                'libelle' => 'Past Représentante Nationale',
            ],
            [
                'libelle' => 'Editrice du district',
            ],
            [
                'libelle' => 'Secrétaire du district',
            ],
            [
                'libelle' => 'Trésorière du district',
            ],
            [
                'libelle' => 'Responsable aux Relations internationales du District',
            ],
            [
                'libelle' => 'Responsable Internet du District',
            ]

        ]);
    }
}
