<?php

namespace Database\Factories;

use App\Models\Pais;
use App\Models\Persona;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Persona::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'apellido' => $this->faker->lastname(),
            'dni' => $this->faker->unique()->numberBetween(10000000, 99999999),
            'telefono' => $this->faker->numberBetween(1000000000, 9999999999),
            'email' => $this->faker->unique()->safeEmail(),
            'pais_id' => Pais::factory(),
            'tipo_persona' => 2,
        ];
    }
}
