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
        'kilometros',
        'imagen',
        'disponible',
        'user_id',
        'cv',
        'garantia',
        'cambio',
        'num_puertas',
        'etiqueta_id',
        'iva',
        'cc'
    ];


    //relacion uno a muchos inversa. se usa belongsTo porque la relacion es de uno a muchos inversa
    public function nombreMarca()
    {
        return $this->belongsTo(MarcasVehiculos::class, 'marca_id');
    }

    public function nombreModelo()
    {
        return $this->belongsTo(ModeloVehiculo::class, 'modelo_id');
    }

    public function nombreCarroceria()
    {
        return $this->belongsTo(carrocerias_vehiculos::class, 'carroceria_id');
    }

    public function nombreColor()
    {
        return $this->belongsTo(ColorVehiculo::class, 'color_id');
    }

    public function nombreUbicacion()
    {
        return $this->belongsTo(ubicacion_provincia_vehiculos::class, 'ubicacion_id');
    }

    public function nombreUser()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function nombreEtiqueta()
    {
        return $this->belongsTo(Etiqueta::class, 'etiqueta_id');
    }
}
