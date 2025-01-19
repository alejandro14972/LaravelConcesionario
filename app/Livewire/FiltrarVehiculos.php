<?php

namespace App\Livewire;

use App\Models\ColorVehiculo;
use App\Models\MarcasVehiculos;
use App\Models\ubicacion_provincia_vehiculos;
use Livewire\Component;

class FiltrarVehiculos extends Component
{

    public $termino;
    public $ubicacion;
    public $marca;
    public $color;
    public $combustible;


    public function leerDatos(){
        $this->dispatch('terminosBusqueda', 
            $this->termino, 
            $this->ubicacion, 
            $this->marca,
            $this->color,
            $this->combustible
        );
    }



    public function render()
    {
        $marca =  MarcasVehiculos::all();
        $ubicaciones = ubicacion_provincia_vehiculos::all();
        $color = ColorVehiculo::all();

        return view('livewire.filtrar-vehiculos', [
            'marcas' => $marca,
            'ubicaciones' => $ubicaciones,
            'colores' => $color,
        ]);
    }
}
