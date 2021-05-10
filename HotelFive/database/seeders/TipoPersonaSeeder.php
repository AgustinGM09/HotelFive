<?php

namespace Database\Seeders;

use App\Models\TipoPersona;
use Illuminate\Database\Seeder;

class TipoPersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoPersona::create([
            'nombre' => 'Empleado'
        ]);

        TipoPersona::create([
            'nombre' => 'Cliente'
        ]);

    }
}
