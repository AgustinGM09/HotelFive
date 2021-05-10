<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Reserva;
use App\Models\Estancia;
use Illuminate\Database\Eloquent\Factories\Factory;

class EstanciaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Estancia::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'recepcionista_id' => User::factory(),
            'reserva_id' => Reserva::factory(),
        ];
    }
}
