<?php

namespace Database\Factories;

use App\Models\Habitacion;
use Illuminate\Database\Eloquent\Factories\Factory;

class HabitacionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Habitacion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tipo_habitacion' => $this->faker->numberBetween(1, 3),
            'disponible' => $this->faker->randomElement([True, False]),
        ];
    }
}
