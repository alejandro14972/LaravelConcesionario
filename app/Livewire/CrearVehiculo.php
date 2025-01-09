<?php

namespace App\Livewire;

use App\Models\modelo;
use Livewire\Component;

use App\Models\ColorVehiculo;
use Livewire\WithFileUploads;
use App\Models\ModeloVehiculo;
use App\Models\marcasvehiculos;
use App\Models\carrocerias_vehiculos;
use App\Models\ubicacion_provincia_vehiculos;

class CrearVehiculo extends Component{


public $titulo;
public $combustible;
public $marca;
public $modelo;
public $carroceria;
public $color;
public $ubicacion;
public $fabricacion;
public $precio;
public $description;
public $imagen;


use WithFileUploads; //uso poara sunir imagenes del form


protected $rules = [
    'titulo' => 'required|string',
    'combustible' => 'required|string',
    'marca' => 'required|string',
    'modelo' => 'required|string',
    'carroceria' => 'required|string',
    'color' => 'required|string',
    'ubicacion' => 'required|string',
    'fabricacion' => 'required|date',
    'precio' => 'required|numeric',
    'description' => 'required|string',
    'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
];


public function crearVehiculo(){
    $datos = $this->validate();

}


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
