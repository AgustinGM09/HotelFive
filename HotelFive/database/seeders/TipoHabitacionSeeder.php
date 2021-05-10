<?php

namespace Database\Seeders;

use App\Models\TipoHabitacion;
use Illuminate\Database\Seeder;

class TipoHabitacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoHabitacion::create([
            'nombre' => 'Individual',
            'cantidad_camas' => 1,
            'precio' => 2000
        ]);

        TipoHabitacion::create([
            'nombre' => 'Doble',
            'cantidad_camas' => 2,
            'precio' => 2500
        ]);

        TipoHabitacion::create([
            'nombre' => 'Triple',
            'cantidad_camas' => 3,
            'precio' => 3000
        ]);
    }
}
