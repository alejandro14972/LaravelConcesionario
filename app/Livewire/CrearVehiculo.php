<?php

namespace App\Livewire;

use App\Models\marcasvehiculos;
use Livewire\Component;

class CrearVehiculo extends Component
{
    public function render()
    {

        //consultar bd para obtener las marcas de vehiculos
        $marcas = marcasvehiculos::all();


        return view('livewire.crear-vehiculo', [
            'marcas' => $marcas
        ]);
    }
}
