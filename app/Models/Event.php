<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha',
        'hora',
        'nombre_actividad',
        'nombre_participante',
        'email',
        'telefono',
    ];
}
