<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vehiculo extends Model
{
    use HasFactory;

    //nombre de la tabla
    protected $fillable = [
        'titulo',
        'combustible',
        'marca_id',
        'modelo_id',
        'carroceria_id',
        'color_id',
        'ubicacion_id',
        'fabricacion',
        'precio',
        'description',
        'imagen',
        'disponible',
        'user_id',
    ];

}
