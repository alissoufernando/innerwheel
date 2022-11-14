<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    public $roleSuper = 'Super Administrateur';
    public $roleAdmin = 'Administrateur';
    public $roleAgent = 'Agent SIMAU';
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdmin = User::create([
            'name' => 'Super Administrateur',
            'created_at' => now(),
            'email' => 'super@admin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);


        $adminRole = Role::where('name', "Super Administrateur")->first();
        $superAdmin->roles()->attach($adminRole);

        $admin = User::create([
            'name' => 'Administrateur',
            'created_at' => now(),
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        $adminRoles = Role::where('name', 'Administrateur')->first();
        $admin->roles()->attach($adminRoles);



        $AgentSimau = User::create([
            'name' => 'Agent SIMAU',
            'created_at' => now(),
            'email' => 'AgentSIMAU@admin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);


        $agentRole = Role::where('name', "Agent SIMAU")->first();
        $AgentSimau->roles()->attach($agentRole);

        $AgentSimau1 = User::create([
            'name' => 'Agent SIMAU1',
            'created_at' => now(),
            'email' => 'AgentSIMAU1@admin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);


        $agentRole = Role::where('name', "Agent SIMAU")->first();
        $AgentSimau1->roles()->attach($agentRole);

        $AgentSimau2 = User::create([
            'name' => 'Agent SIMAU2',
            'created_at' => now(),
            'email' => 'AgentSIMAU2@admin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);


        $agentRole = Role::where('name', "Agent SIMAU")->first();
        $AgentSimau2->roles()->attach($agentRole);

        $AgentSimau3 = User::create([
            'name' => 'Agent SIMAU1',
            'created_at' => now(),
            'email' => 'AgentSIMAU3@admin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);


        $agentRole = Role::where('name', "Agent SIMAU")->first();
        $AgentSimau3->roles()->attach($agentRole);



    }
}
