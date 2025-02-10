<?php

namespace App\Livewire;

use App\Models\modelo;
use Livewire\Component;

use App\Models\ColorVehiculo;
use Livewire\WithFileUploads;
use App\Models\ModeloVehiculo;
use App\Models\CarroceriasVehiculos;
use App\Models\Etiqueta;
use App\Models\MarcasVehiculos;
use App\Models\UbicacionProvinciaVehiculos;
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
    public $garantia = false;
    public $cc = 0;
    public $iva = false;
    public $etiqueta;
    public $puertas;
    public $cambio = 0;

    //atributos inputs dinamicos
    public $marcas;
    public $modelos = [];



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
        'cv' => 'required|numeric',
        'garantia' => 'boolean', // Validación de checkbox
        'cc' => 'numeric|min:0',
        'iva' => 'boolean',
        'etiqueta' => 'required|numeric|between:0,5',
        'puertas' => 'required|numeric|between:1,6',
        'cambio' => 'required|numeric|between:0,1'
    ];


    public function mount()
    {
        $this->marcas = MarcasVehiculos::all();
        $this->modelos = collect();
    }

    public function updatedMarca($value)
    {
        //dd($value);
    
            $this->modelos = ModeloVehiculo::where('marca_id', $value)->get();

            // Si hay modelos, asignar el primer modelo disponible
            if ($this->modelos->count() > 0) {
                $this->modelo = $this->modelos->first()->id; // Asignar el primer modelo
            } else {
                $this->modelo = null; // Ningún modelo disponible
            }
        
    }



    public function render()
    {
        $carrocerias = CarroceriasVehiculos::all();
        $provincias = UbicacionProvinciaVehiculos::all();
        $colores = ColorVehiculo::all();
        $etiquetas = Etiqueta::all();

        return view('livewire.crear-vehiculo', [
            'carrocerias' => $carrocerias,
            'provincias' => $provincias,
            'colores' => $colores,
            'etiquetas' => $etiquetas,
        ]);
    }


    public function crearVehiculo()
    {

        $datos = $this->validate();
        $imagen = $this->imagen->store('vehiculos', 'public');
        $nombreImg = str_replace('vehiculos/', '', $imagen);

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
            'cv' => $datos['cv'],
            'garantia' => $datos['garantia'],
            'cc' => $datos['cc'],
            'iva' => $datos['iva'],
            'etiqueta_id' => $datos['etiqueta'],
            'num_puertas' => $datos['puertas'],
            'cambio' => $datos['cambio']
        ]);

        //crear mensaje de exito
        session()->flash('alerta', '¡Vehículo creado con éxito!');
        return redirect()->route('vehiculos.index');
    }
}
