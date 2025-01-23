<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'direccion_id', 
        'telefono',
        'email',
        'user_id',
    ];

    //relaciones
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id'); // Asegúrate de que 'user_id' sea la clave foránea en tu tabla de empresas
    }
    
    public function nombreUbicacion()
    {
        return $this->belongsTo(UbicacionProvinciaVehiculos::class, 'direccion_id');
    }

}
