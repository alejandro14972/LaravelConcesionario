<?php

namespace App\Livewire;

use App\Models\Empresa;
use Livewire\Component;

class MostrarMiEmpresa extends Component
{
    public function render()
    {

        $empresa = Empresa::where('user_id', auth()->user()->id)->get();


   

        return view('livewire.mostrar-mi-empresa', [
            'empresa' => $empresa
        ]);
    }
}
