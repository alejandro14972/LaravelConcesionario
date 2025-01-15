<?php

namespace App\Livewire;

use App\Models\Empresa;
use Livewire\Component;
use App\Models\ubicacion_provincia_vehiculos;

class EditarEmpresa extends Component
{

    public $empresa_id;
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


    public function mount(Empresa $empresa)
    {
        $this->empresa_id = $empresa->id;
        $this->titulo = $empresa->nombre;
        $this->direccion = $empresa->direccion;
        $this->telefono = $empresa->telefono;
        $this->email = $empresa->email;
    }


    
    public function updateEmpresa(){

        $datos = $this->validate();
        $empresa = Empresa::find($this->empresa_id);

        if (!$empresa) {
            session()->flash('error', 'Empresa no encontrada.');
            return redirect()->route('empresa.index', $empresa->nombre);
        }
        
        //asignar valores
        $empresa->nombre = $datos['titulo'];
        $empresa->direccion = $datos['direccion'];
        $empresa->telefono = $datos['telefono'];
        $empresa->email = $datos['email'];   
        
        $empresa->save();

        //session()->flash('mensaje', 'Empresa actualizada correctamente.');
        session()->flash('alerta', '¡Empresa actualizada con éxito!');

        return redirect()->route('empresa.index', $empresa->nombre);

    }

    public function render()
    {

        $provincias = ubicacion_provincia_vehiculos::all();

        return view('livewire.editar-empresa',[
            'provincias' => $provincias
        ]);
    }
}
