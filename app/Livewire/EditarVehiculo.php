<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ColorVehiculo;
use Livewire\WithFileUploads;
use App\Models\ModeloVehiculo;
use App\Models\MarcasVehiculos;
use App\Models\carrocerias_vehiculos;
use App\Models\ubicacion_provincia_vehiculos;
use App\Models\Vehiculo;

class EditarVehiculo extends Component
{
    public $vehiculo_id;
    public $titulo;
    public $carroceria;
    public $combustible;
    public $marca;
    public $modelo;
    public $ubicacion;
    public $color;
    public $kilometros;
    public $precio;
    public $fabricacion;
    public $description;
    public $imagen;
    public $imagen_nueva;


    //nombre de las reglas de validacion wire:model
    protected $rules = [
        'titulo' => 'required|string',
        'combustible' => 'required|string|starts_with:Gasolina,Diesel,Híbrido,Eléctrico',
        'marca' => 'required|numeric',
        'modelo' => 'required|numeric',
        'carroceria' => 'required|numeric|between:1,8',
        'color' => 'required|numeric',
        'kilometros' => 'required|numeric|min:0',
        'ubicacion' => 'required|numeric',
        'fabricacion' => 'required|date|before:tomorrow',
        'precio' => 'required|numeric|min:0',
        'description' => 'required|string',
        'imagen_nueva' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
    ];



    use WithFileUploads; //uso poara subir imagenes del form


    public function mount(Vehiculo $vehiculo)
    {
        $this->vehiculo_id = $vehiculo->id;
        $this->titulo = $vehiculo->titulo;
        $this->carroceria = $vehiculo->carroceria_id;
        $this->combustible = $vehiculo->combustible;
        $this->marca = $vehiculo->marca_id;
        $this->modelo = $vehiculo->modelo_id;
        $this->ubicacion = $vehiculo->ubicacion_id;
        $this->color = $vehiculo->color_id;
        $this->kilometros = $vehiculo->kilometros;
        $this->precio = $vehiculo->precio;
        $this->fabricacion = $vehiculo->fabricacion;
        $this->description = $vehiculo->description;
        $this->imagen = $vehiculo->imagen; //se carga la imagen del vehiculo
    }



    //editar vehiculo 
    public function updateVehiculo()
    {

        $datos =  $this->validate();


        //si hay nueva img 

        if($this->imagen_nueva){
            $imagen = $this->imagen_nueva->store('vehiculos', 'public');
            $datos['imagen'] = str_replace('vehiculos/', '', $imagen);
        }


        //encontar el vehiculo a editar

        $vehiculo = Vehiculo::find($this->vehiculo_id);

        //asiganr valores

        $vehiculo->titulo = $datos['titulo'];
        $vehiculo->combustible = $datos['combustible'];
        $vehiculo->marca_id = $datos['marca'];
        $vehiculo->modelo_id = $datos['modelo'];
        $vehiculo->carroceria_id = $datos['carroceria'];
        $vehiculo->color_id = $datos['color'];
        $vehiculo->kilometros = $datos['kilometros'];
        $vehiculo->ubicacion_id = $datos['ubicacion'];
        $vehiculo->precio = $datos['precio'];
        $vehiculo->fabricacion = $datos['fabricacion'];
        $vehiculo->description = $datos['description'];
        $vehiculo->imagen = $datos['imagen'] ?? $vehiculo->imagen; //se carga la imagen del vehiculo

        //guardar
        $vehiculo->save();
        //redireccionar
        session()->flash('mensaje', 'Vehiculo actualizado');
        return redirect()->route('vehiculos.index');
    }


    public function render()
    {


        //consultar bd para obtener las marcas de vehiculos
        $carrocerias = carrocerias_vehiculos::all();
        $marcas = MarcasVehiculos::all();
        $provincias = ubicacion_provincia_vehiculos::all();
        $modelos = ModeloVehiculo::all();
        $colores = ColorVehiculo::all();

        return view('livewire.editar-vehiculo', [
            'marcas' => $marcas,
            'carrocerias' => $carrocerias,
            'provincias' => $provincias,
            'modelos' => $modelos,
            'colores' => $colores

        ]);
    }
}
