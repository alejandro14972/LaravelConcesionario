<?php

namespace App\Livewire;

use App\Models\Vehiculo;
use Livewire\Component;

class VerVehiculo extends Component
{


    public $vehiculo;

    public function mount(Vehiculo $vehiculo)
    {
        $this->vehiculo = $vehiculo;
    }

    public function render()
    {
        return view('livewire.ver-vehiculo');
    }
}
