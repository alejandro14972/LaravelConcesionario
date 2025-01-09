<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Vehiculo;

class MostrarVehiculos extends Component
{
    public function render()
    {
        $vehiculos = Vehiculo::where('user_id', auth()->user()->id)->paginate(10);
        
        return view('livewire.mostrar-vehiculos', [
            'vehiculos' => $vehiculos
        ]);
    }
}
