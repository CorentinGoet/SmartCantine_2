<?php

namespace Database\Factories;

use App\Models\Capteur;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\Factory;

class CapteurFactory extends Factory
{
    /**
     * Name of the factory's model.
     * @var string
     */
    protected $model = Capteur::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cantine_id' => 1,
            'type' => $this->faker->randomElement(['Arduino', 'Raspberry']),

        ];
    }
}
