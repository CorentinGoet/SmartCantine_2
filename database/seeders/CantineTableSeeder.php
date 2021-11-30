<?php

namespace Database\Seeders;

use App\Models\Cantine;
use Illuminate\Database\Seeder;

class CantineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cantine::class->factory()->create();
    }
}
