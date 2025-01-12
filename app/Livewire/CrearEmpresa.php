<?php

namespace App\Livewire;

use App\Models\Empresa;
use App\Models\ubicacion_provincia_vehiculos;
use Livewire\Component;

class CrearEmpresa extends Component
{


    public $titulo;
    public $direccion;
    public $provincia;
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

     Empresa::create([
            'nombre' => $datos['titulo'],
            'direccion' => $datos['direccion'],
          
            'telefono' => $datos['telefono'],
            'email' => $datos['email'],
            'user_id' => auth()->user()->id,
        ]);

       
        session()->flash('mensajeEmpresa', 'Empresa creada correctamente');


        return redirect()->route('empresa.index');

    }




    public function render()
    {

        $provincias = ubicacion_provincia_vehiculos::all();

        return view('livewire.crear-empresa', [
            'provincias' => $provincias
        ]);
    }
}
