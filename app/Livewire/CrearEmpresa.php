<?php

namespace App\Livewire;

use App\Models\Empresa;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\UbicacionProvinciaVehiculos;

class CrearEmpresa extends Component
{

    public $titulo;
    public $direccion;
    public $telefono;
    public $email;
    public $logo;

    use WithFileUploads; //uso poara subir imagenes del form


    protected $rules = [
        'titulo' => 'required|string',
        'direccion' => 'required|numeric',
        'telefono' => 'required|numeric',
        'email' => 'required|email',
        'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ];


    public function crearEmpresa()
    {
        $datos = $this->validate();

        //dd($datos);

        //almacenarLogo
        $logo = $this->logo->store('logos', 'public');
        $nombreLogo = str_replace('logos/', '', $logo);

        $empresa = Empresa::create([
            'nombre' => $datos['titulo'],
            'direccion_id' => $datos['direccion'],
            'telefono' => $datos['telefono'],
            'email' => $datos['email'],
            'logo' => $nombreLogo,
            'user_id' => auth()->user()->id,
        ]);

        session()->flash('mensajeEmpresa', 'Empresa creada correctamente');
        return redirect()->route('empresa.index', $empresa->nombre);
    }

    public function render()
    {
        $provincias = UbicacionProvinciaVehiculos::all();
        return view('livewire.crear-empresa', [
            'provincias' => $provincias
        ]);
    }
}
