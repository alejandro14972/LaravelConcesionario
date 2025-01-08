<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MarcasVehiculos extends Model
{
    //


    public function modelo()
    {
        return $this->hasMany(ModeloVehiculo::class, 'marca_id');
    }
}
