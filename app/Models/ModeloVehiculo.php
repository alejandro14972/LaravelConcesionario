<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ModeloVehiculo extends Model
{
    use HasFactory;

    protected $table = 'modelo_vehiculos';

    protected $fillable = [
        'nombre_modelo',
        'marca_id',
    ];

    public function marca()
    {
        return $this->belongsTo(MarcasVehiculos::class)->select(['id', 'marca']);
    }
}
