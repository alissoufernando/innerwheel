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
        Role::create(['name' => 'Utilisateur']);
        Role::create(['name' => 'Agent SIMAU']);
        // Role::create(['name' => 'Propriétaire']);
        Role::create(['name' => 'Super Administrateur']);
    }
}
