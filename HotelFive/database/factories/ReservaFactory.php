<?php

namespace Database\Factories;

use Carbon\Carbon;
use App\Models\Cliente;
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
            'fecha_entrada' => Carbon::now(),
            'fecha_salida' => Carbon::now()->addDays(5),//sumar dias
            'cliente_id' => Cliente::factory(),
            'habitacion_id' => Habitacion::factory(),
            'nro_personas' => 3,//if $this->habitacion_id === 1
        ];
    }
}
