<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\ModeArrivee;
use App\Models\ActiviteAction;
use Illuminate\Database\Seeder;
use Database\Seeders\UserTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(EditionTableSeeder::class);
        $this->call(ActiviteTableSeeder::class);
        $this->call(PaysDepartementsVilleSeeder::class);
        $this->call(HebergementTableSeeder::class);
        $this->call(LieuTableSeeder::class);
        $this->call(PosteTableSeeder::class);
        $this->call(TarifTableSeeder::class);
        $this->call(ModeArriveeTableSeeder::class);
        $this->call(ClubTableSeeder::class);
        $this->call(StatutTableSeeder::class);
        $this->call(ModePaiementTableSeeder::class);
        $this->call(ActiviteActionTableSeeder::class);






    }
}
