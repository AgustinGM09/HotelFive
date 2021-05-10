<?php

namespace Database\Factories;

use Carbon\Carbon;
use App\Models\Persona;
use App\Models\Reserva;
use App\Models\Habitacion;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reserva::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fecha_ingreso' => Carbon::now(),
            'fecha_salida' => Carbon::now()->addDays(5),//sumar dias
            'cliente_id' => Persona::factory(),
            'habitacion_id' => Habitacion::factory(),
            'cant_huespedes' => 3,//if $this->habitacion_id === 1
            'total' => 3000,
            //'nro_tarjeta' => $this->faker->numberBetween(100000000000, 999999999999),
        ];
    }
}
