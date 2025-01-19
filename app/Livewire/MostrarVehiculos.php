<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Vehiculo;
use Livewire\Attributes\On;

class MostrarVehiculos extends Component
{

    public $termino;
    public $ubicacion;
    public $marca;
    public $color;
    public $combustible;

    protected $listeners = ['terminosBusqueda' => 'buscar'];

    // Escuchar el evento desde el frontend para eliminar un vehículo
    #[On('eliminarVehiculo')]
    public function eliminarVehiculo($vehiculoId)
    {
        $vehiculo = Vehiculo::findOrFail($vehiculoId);
        $elemteoBorrado = $vehiculo[0];
        $elemteoBorrado->delete();
        session()->flash('mensaje', 'Vehículo eliminado correctamente.');
    }


    public function buscar($termino, $ubicacion, $marca, $color, $combustible){
        $this->termino = $termino;
        $this->ubicacion = $ubicacion;
        $this->marca = $marca;
        $this->color = $color;
        $this->combustible= $combustible;
    }


    public function render()
    {
        $vehiculos = Vehiculo::where('user_id', auth()->user()->id) // Filtra por el usuario actual
            ->when(!empty($this->termino), function ($query) {
                $query->where('titulo', 'LIKE', '%' . $this->termino . '%'); // Aplica filtro por término si está definido
            })
            ->when(!empty($this->ubicacion), function ($query) {
                $query->where('ubicacion_id', $this->ubicacion);
            })
            ->when(!empty($this->marca), function ($query) {
                $query->where('marca_id', $this->marca);
            })
            ->when(!empty($this->color), function ($query) {
                $query->where('color_id', $this->color);
            })
            ->when(!empty($this->combustible), function ($query) {
                $query->where('combustible', $this->combustible);
            })
            ->get();
    
        return view('livewire.mostrar-vehiculos', [
            'vehiculos' => $vehiculos,
        ]);
    }
    
}
