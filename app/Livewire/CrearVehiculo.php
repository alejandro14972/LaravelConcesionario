<?php

namespace App\Livewire;

use App\Models\modelo;
use Livewire\Component;

use App\Models\marcasvehiculos;
use App\Models\carrocerias_vehiculos;
use App\Models\modelo_vehiculo;
use App\Models\ModeloVehiculo;
use App\Models\ubicacion_provincia_vehiculos;

class CrearVehiculo extends Component
{
    public function render()
    {

        //consultar bd para obtener las marcas de vehiculos
        $carrocerias = carrocerias_vehiculos::all();
        $marcas = marcasvehiculos::all();
        $provincias = ubicacion_provincia_vehiculos::all();
        $modelos = ModeloVehiculo::all();


        return view('livewire.crear-vehiculo', [
            'marcas' => $marcas,
            'carrocerias' => $carrocerias,
            'provincias' => $provincias,
            'modelos' => $modelos
            
        ]);
    }
}
