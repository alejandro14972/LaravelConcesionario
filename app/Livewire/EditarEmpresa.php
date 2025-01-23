<?php

namespace App\Livewire;

use App\Models\Empresa;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\UbicacionProvinciaVehiculos;
use App\Models\ubicacion_provincia_vehiculos;

class EditarEmpresa extends Component
{

    public $empresa_id;
    public $titulo;
    public $direccion;
    public $provincia;
    public $telefono;
    public $logo;
    public $logo_nuevo;
    public $email;


    protected $rules = [
        'titulo' => 'required|string',
        'direccion' => 'required|numeric',
        'telefono' => 'required|numeric',
        'email' => 'required|email',
        'logo_nuevo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ];

    use WithFileUploads;

    public function mount(Empresa $empresa)
    {
        $this->empresa_id = $empresa->id;
        $this->titulo = $empresa->nombre;
        $this->direccion = $empresa->direccion_id;
        $this->telefono = $empresa->telefono;
        $this->email = $empresa->email;
        $this->logo = $empresa->logo;
    }


    
    public function updateEmpresa(){

        $datos = $this->validate();
        $empresa = Empresa::find($this->empresa_id);

        if (!$empresa) {
            session()->flash('error', 'Empresa no encontrada.');
            return redirect()->route('empresa.index', $empresa->nombre);
        }

        if($this->logo_nuevo){
            $logo = $this->logo_nuevo->store('logos', 'public');
            $datos['logo'] = str_replace('logos/', '', $logo);
        }
        
        //asignar valores
        $empresa->nombre = $datos['titulo'];
        $empresa->direccion_id = $datos['direccion'];
        $empresa->telefono = $datos['telefono'];
        $empresa->email = $datos['email'];   
        $empresa->logo = $datos['logo'] ?? $empresa->logo;
        
        $empresa->save();

        //session()->flash('mensaje', 'Empresa actualizada correctamente.');
        session()->flash('alerta', '¡Empresa actualizada con éxito!');

        return redirect()->route('empresa.index', $empresa->nombre);

    }

    public function render()
    {

        $provincias = UbicacionProvinciaVehiculos::all();

        return view('livewire.editar-empresa',[
            'provincias' => $provincias
        ]);
    }
}
