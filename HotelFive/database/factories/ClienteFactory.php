<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dni' => $this->faker->unique()->numberBetween(10000000, 99999999),
            'pasaporte' => $this->faker->unique()->numberBetween(10000000, 99999999),
            'nombre' => $this->faker->name(),
            'apellido' => $this->faker->lastname(),
            'email' => $this->faker->unique()->safeEmail(),
            'telefono' => $this->faker->numberBetween(1000000000, 9999999999),
        ];
    }
}
