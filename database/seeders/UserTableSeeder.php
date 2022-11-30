<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\RoleUser;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    public $roleSuper = 'Super Administrateur';
    public $roleAdmin = 'Administrateur';
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
        $superAdminR = new RoleUser();
        $superAdminR->user_id = $superAdmin->id;
        $superAdminR->role_id = $adminRole->id;
        $superAdminR->save();

        $admin = User::create([
            'name' => 'Administrateur',
            'created_at' => now(),
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        $adminRoles = Role::where('name', 'Administrateur')->first();
        $adminR = new RoleUser();
        $adminR->user_id = $admin->id;
        $adminR->role_id = $adminRoles->id;
        $adminR->save();

    }
}
