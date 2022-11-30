<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'Administrateur']);
        Role::create(['name' => 'Super Administrateur']);
        Role::create(['name' => 'Utilisateur']);
        Role::create(['name' => 'Présidente Commission Hébergement']);
        Role::create(['name' => 'Trésorière de  District']);
        Role::create(['name' => 'Gouverneur']);
        Role::create(['name' => 'Secrétaire de District']);
        Role::create(['name' => 'Présidente du Comité d\'Organisation']);
    }
}
