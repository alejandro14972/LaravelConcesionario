<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contacta extends Model
{
    use HasFactory;

    protected $table = 'contacto';

    protected $fillable = [
        'nombre_user',
        'email_user', 
        'telefono_user',
        'mensaje_user',
        'vehiculo_id',
    ];
}
