<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $empresa = Empresa::where('user_id', auth()->id())->first();

    // Si no hay empresa asociada
    if (!$empresa) {
        session()->flash('mensajeError', 'No tiene empresas asociadas.');
        return redirect()->route('vehiculos.index'); // Cambia por la ruta que tenga sentido en tu app
    }
    
    // Verifica el permiso con Gate
    if (Gate::allows('view', $empresa)) {
        return view('empresas.index', [
            'nombre' => $empresa->nombre,
            'empresa' => $empresa,
        ]);
    } else {
        session()->flash('error', 'No tiene acceso a ver esta empresa');
        // Redirige con el parámetro `nombre`
        return redirect()->route('empresa.index', ['nombre' => $empresa->nombre]);
    }
}

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('empresas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Empresa $empresa)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empresa $empresa)
    {
        if (Gate::allows('update', $empresa)){
            return view('empresas.edit', [
                'empresa' => $empresa
            ]);
        }else{
            session()->flash('error', 'No tiene acceso a editar esta empresa');
            return redirect()->route('empresa.index', $empresa->nombre);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
