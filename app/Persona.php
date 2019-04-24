<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $fillable = [
        'name', 'apellidos', 'documento', 'direccion', 'fechanacimiento', 'telefono',
    ];
}
