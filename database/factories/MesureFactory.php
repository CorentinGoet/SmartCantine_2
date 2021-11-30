<?php

namespace Database\Factories;

use App\Models\Mesure;
use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Database\Eloquent\Builder;

class MesureFactory extends Factory
{
    /**
     * Name of the factory's model.
     * @var string
     */
    protected $model = Mesure::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'capteur_id' => $this->faker->numberBetween(0, 5), // Only 5 different capt
            'date_mesure' => $this->faker->dateTimeThisMonth(),
            'noise_level' => $this->faker->numberBetween(0, 150),
        ];

    }
}
