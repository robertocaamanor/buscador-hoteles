<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ofertas extends Model
{
    protected $table = 'ofertas';
    protected $fillable = [
        'nombre_hotel', 'habitaciones', 'dormitorios', 'banos', 'cantidad_ocupantes', 'descripcion'
    ];
}
