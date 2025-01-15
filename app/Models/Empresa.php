<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'direccion',
        'telefono',
        'email',
        'user_id',
    ];




    //relaciones
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id'); // Asegúrate de que 'user_id' sea la clave foránea en tu tabla de empresas
    }

}
