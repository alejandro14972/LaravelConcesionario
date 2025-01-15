<?php

namespace App\Livewire;

use App\Models\Empresa;
use Livewire\Attributes\On;
use Livewire\Component;

class MostrarMiEmpresa extends Component
{
    // Escuchar el evento desde el frontend para eliminar un vehículo
    #[On('eliminarEmpresa')]
    public function eliminarEmpresa($empresaId)
    {
        $empresa = Empresa::findOrFail($empresaId);
        $elemteoBorrado = $empresa[0];
        $elemteoBorrado->delete();
        session()->flash('mensaje', 'Empresa eliminada correctamente.');
        return redirect()->route('vehiculos.index');
    }


    public function render()
    {
        $empresa = Empresa::where('user_id', auth()->user()->id)->get();
        return view('livewire.mostrar-mi-empresa', [
            'empresa' => $empresa
        ]);
    }
}
