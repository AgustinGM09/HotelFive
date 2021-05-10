<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    public function habitacion()
    {
        return $this->belongsTo('App\Models\Habitacion');
    }

    public function estancia()
    {
        return $this->hasOne('App\Models\Estancia');
    }
}
