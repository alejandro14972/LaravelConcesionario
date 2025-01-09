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
use App\Models\Vehiculo;

class CrearVehiculo extends Component{


public $titulo;
public $combustible;
public $marca;
public $modelo;
public $carroceria;
public $color;
public $kilometros;
public $ubicacion;
public $fabricacion;
public $precio;
public $description;
public $imagen;


use WithFileUploads; //uso poara sunir imagenes del form

//nombre de las reglas de validacion wire:model
protected $rules = [
    'titulo' => 'required|string',
    'combustible' => 'required|string',
    'marca' => 'required|string',
    'modelo' => 'required|string',
    'carroceria' => 'required|string',
    'color' => 'required|string',
    'kilometros' => 'required|numeric',
    'ubicacion' => 'required|string',
    'fabricacion' => 'required|date',
    'precio' => 'required|numeric',
    'description' => 'required|string',
    'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
];


public function crearVehiculo(){

    $datos = $this->validate();
    //dd($datos);
    //alamcenar imagen
    $imagen = $this->imagen->store('public/vehiculos');
    $nombreImg = str_replace('public/vehiculos/', '', $imagen);
    //dd($imagen);
    //dd($nombreImg);

    //crear vehiculo
    Vehiculo::create([
        'titulo' => $datos['titulo'],
        'combustible' => $datos['combustible'],
        'marca_id' => $datos['marca'],
        'modelo_id' => $datos['modelo'],
        'carroceria_id' => $datos['carroceria'],
        'color_id' => $datos['color'],
        'kilometros' => $datos['kilometros'],
        'ubicacion_id' => $datos['ubicacion'],
        'fabricacion' => $datos['fabricacion'],
        'precio' => $datos['precio'],
        'description' => $datos['description'],
        'imagen' => $nombreImg,
        'user_id' => auth()->user()->id,
    ]);

    //crear mensaje de exito
    session()->flash('mensaje', 'Vehiculo creado con exito');

    //redirect a la pagina de inicio
    return redirect()->route('vehiculos.index');
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
