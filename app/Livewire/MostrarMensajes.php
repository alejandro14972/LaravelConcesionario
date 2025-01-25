<?php

namespace App\Livewire;

use App\Models\Contacta;
use Livewire\Component;

class MostrarMensajes extends Component
{
    public $vehiculoIdentificador; // ID del vehículo

    public function render()
    {
        // Filtrar los mensajes por el vehículo actual
        $mensajes = Contacta::where('vehiculo_id', $this->vehiculoIdentificador)->get();

        return view('livewire.mostrar-mensajes', [
            'mensaje' => $mensajes
        ]);
    }
}
