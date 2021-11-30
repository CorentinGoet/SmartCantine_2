<?php

namespace Database\Seeders;

use App\Models\Capteur;
use Illuminate\Database\Seeder;

class CapteurTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Capteur::class->factory()->count(5)->create();
    }
}
