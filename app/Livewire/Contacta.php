<?php

namespace App\Livewire;

use App\Models\Contacta as ModelsContacta;
use Livewire\Component;

class Contacta extends Component
{

    public $nombreUser;
    public $emailUser;
    public $telefonoUser;
    public $mensajeUser;
    public $idVehiculo;

    public $vehiculo;

    protected $rules = [
        'nombreUser' => 'required|string',
        'emailUser' => 'required|email',
        'telefonoUser' => 'required|numeric|min:9',
        'mensajeUser' => 'required|string',
        'idVehiculo' => 'numeric'
    ];

    public function mount($vehiculo)
    {
        $this->vehiculo = $vehiculo; // Asegúrate de asignar el dato correctamente
        $this->mensajeUser = "Hola, estoy interesado en ". $vehiculo->nombreMarca->marca . " ". $vehiculo->nombreModelo->nombre_modelo;
        $this->idVehiculo = $vehiculo->id;
    }


    public function contacta()
    {
        $datos = $this->validate();
        //dd($datos);

        ModelsContacta::create([
            'nombre_user' => $this->nombreUser,
            'email_user' => $this->emailUser,
            'telefono_user' => $this->telefonoUser,
            'mensaje_user' => $this->mensajeUser,
            'vehiculo_id' => $this->idVehiculo
        ]);

        session()->flash('mensajeContacta', 'Mensaje Enviado');
        return redirect()->route('vehiculos.show', $this->idVehiculo);

    }


    public function render()
    {
        return view('livewire.contacta');
    }
}
