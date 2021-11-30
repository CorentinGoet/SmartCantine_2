<?php

namespace Database\Seeders;

use App\Models\Cantine;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(CantineTableSeeder::class);
        $this->call(CapteurTableSeeder::class);
        $this->call(MesureTableSeeder::class);
        /*
         * To make the fake values run the following commands
         *  composer dump-autoload
         *
         * in tinker:
         *
         * Cantine::factory->create()
         * Capteur::factory->count(5)->create()
         * Mesures::factory->count(50)->create()
         */
    }
}
