<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detallecompra extends Model
{
    protected $fillable = [
        'cantidad', 'precio',
    ];
}
