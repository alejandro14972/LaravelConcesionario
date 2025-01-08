<?php

namespace App\Livewire;

use App\Models\modelo;
use Livewire\Component;

use App\Models\ColorVehiculo;
use App\Models\ModeloVehiculo;
use App\Models\marcasvehiculos;
use App\Models\modelo_vehiculo;
use App\Models\carrocerias_vehiculos;
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
        $colores = ColorVehiculo::all();


        return view('livewire.crear-vehiculo', [
            'marcas' => $marcas,
            'carrocerias' => $carrocerias,
            'provincias' => $provincias,
            'modelos' => $modelos,
            'colores' => $colores
            
        ]);
    }
}
