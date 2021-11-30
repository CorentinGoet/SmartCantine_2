<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Builder;
use App\Models\Cantine;
use Illuminate\Database\Eloquent\Factories\Factory;

class CantineFactory extends Factory
{
    /**
     * Name of the factory's model.
     * @var string
     */
    protected $model = Cantine::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'location' => 'ENSTA Bretagne',
        ];
    }
}
