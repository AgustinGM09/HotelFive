<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estancia extends Model
{
    use HasFactory;

    public function reserva()
    {
        return $this->hasOne('App\Models\Reserva');
    }

    public function persona()
    {
        return $this->hasOne('App\Models\Persona');
    }

}
