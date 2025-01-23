<?php

namespace App\Livewire;

use App\Models\Empresa;
use App\Models\UbicacionProvinciaVehiculos;
use Livewire\Component;

class CrearEmpresa extends Component
{

    public $titulo;
    public $direccion;
    public $telefono;
    public $email;


    protected $rules = [
        'titulo' => 'required|string',
        'direccion' => 'required|numeric',
        'telefono' => 'required|numeric',
        'email' => 'required|email',
    ];


    public function crearEmpresa()
    {
        $datos = $this->validate();

        //dd($datos);

        $empresa = Empresa::create([
            'nombre' => $datos['titulo'],
            'direccion_id' => $datos['direccion'],
            'telefono' => $datos['telefono'],
            'email' => $datos['email'],
            'user_id' => auth()->user()->id,
        ]);

        session()->flash('mensajeEmpresa', 'Empresa creada correctamente');
        return redirect()->route('empresa.index', '$empresa->nombre');
    }

    public function render()
    {

        $provincias = UbicacionProvinciaVehiculos::all();
        

        return view('livewire.crear-empresa', [
            'provincias' => $provincias
        ]);
    }
}
