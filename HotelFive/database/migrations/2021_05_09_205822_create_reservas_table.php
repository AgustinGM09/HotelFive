<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('fecha_ingreso');
            $table->dateTime('fecha_salida');
            $table->unsignedTinyInteger('cant_huespedes');
            $table->foreignId('cliente_id')->constrained('personas');
            $table->foreignId('habitacion_id')->constrained('habitaciones');
            $table->unsignedInteger('nro_tarjeta')->nullable();
            $table->float('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservas');
    }
}
