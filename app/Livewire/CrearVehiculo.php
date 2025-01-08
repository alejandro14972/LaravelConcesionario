<?php

namespace App\Livewire;

use App\Models\carrocerias_vehiculos;
use App\Models\marcasvehiculos;
use App\Models\ubicacion_provincia_vehiculos;
use Livewire\Component;

class CrearVehiculo extends Component
{
    public function render()
    {

        //consultar bd para obtener las marcas de vehiculos
        $carrocerias = carrocerias_vehiculos::all();
        $marcas = marcasvehiculos::all();
        $provincias = ubicacion_provincia_vehiculos::all();


        return view('livewire.crear-vehiculo', [
            'marcas' => $marcas,
            'carrocerias' => $carrocerias,
            'provincias' => $provincias
            
        ]);
    }
}
