<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;



class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('vehiculos.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('vehiculos.create');
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
    public function show(Vehiculo $vehiculo)
    {
       // dd($vehiculo);
       /* return view('vehiculos.show', [
        'vehiculo' => $vehiculo
       ]); */

       if (Gate::allows('view', $vehiculo)){
        return view('vehiculos.show', [
            'vehiculo' => $vehiculo
        ]);
    }else{
        session()->flash('mensajeError', 'No tiene acceso a ver este vehiculo');
        return redirect()->route('vehiculos.index');
    }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehiculo $vehiculo)
    {
        //
        //dd($vehiculo);

        //$this->authorize('update', $vacante);
    if (Gate::allows('update', $vehiculo)){
        return view('vehiculos.edit', [
            'vehiculo' => $vehiculo
        ]);
    }else{
        session()->flash('mensajeError', 'No tiene acceso a editar este vehiculo');
        return redirect()->route('vehiculos.index');
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
