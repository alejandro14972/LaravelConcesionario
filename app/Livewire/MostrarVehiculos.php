<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Vehiculo;

class MostrarVehiculos extends Component
{
    // Escuchar el evento desde el frontend para eliminar un vehículo
    #[On('eliminarVehiculo')]
    public function eliminarVehiculo($vehiculoId)
    {
        $vehiculo = Vehiculo::findOrFail($vehiculoId);
        $elemteoBorrado = $vehiculo[0];
        $elemteoBorrado->delete();
        session()->flash('mensaje', 'Vehículo eliminado correctamente.');
    }

    public function render()
    {
        $vehiculos = Vehiculo::where('user_id', auth()->user()->id)->paginate(10);

        return view('livewire.mostrar-vehiculos', [
            'vehiculos' => $vehiculos,
        ]);
    }
}
