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

class CrearVehiculo extends Component
{


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
    public $cv;


    use WithFileUploads; //uso poara subir imagenes del form

    //nombre de las reglas de validacion wire:model
    protected $rules = [
        'titulo' => 'required|string',
        'combustible' => 'required|string|starts_with:Gasolina,Diesel,Hibrido,Electrico',
        'marca' => 'required|numeric',
        'modelo' => 'required|numeric',
        'carroceria' => 'required|numeric|between:1,8',
        'color' => 'required|numeric',
        'kilometros' => 'required|numeric|min:0',
        'ubicacion' => 'required|numeric',
        'fabricacion' => 'required|date|before:tomorrow',
        'precio' => 'required|numeric|min:0',
        'description' => 'required|string',
        'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        'cv' => 'required|numeric'
    ];


    public function crearVehiculo()
    {

        $datos = $this->validate();
        //dd($datos);
        //alamcenar imagen
        $imagen = $this->imagen->store('vehiculos', 'public');
        //dd($imagen);
        $nombreImg = str_replace('vehiculos/', '', $imagen);
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
            'cv' => $datos['cv']
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
