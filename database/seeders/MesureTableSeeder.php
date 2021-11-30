<?php

namespace Database\Seeders;

use App\Models\Mesure;
use Illuminate\Database\Seeder;

class MesureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mesure::factory()->count(50)->create();
    }
}
