<?php

use App\Http\Controllers\contactaController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VehiculoController;
use App\Models\Vehiculo;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [VehiculoController::class, 'index'])->middleware(['auth', 'verified'])->name('vehiculos.index');
Route::get('/vehiculos/create', [VehiculoController::class, 'create'])->middleware(['auth', 'verified'])->name('vehiculos.create');
Route::get('/vehiculos/{vehiculo}/edit', [VehiculoController::class, 'edit'])->middleware(['auth', 'verified'])->name('vehiculos.edit');
Route::get('/vehiculos/{vehiculo}', [VehiculoController::class, 'show'])->middleware(['auth', 'verified'])->name('vehiculos.show');

//empresa
Route::get('/empresa/create', [EmpresaController::class, 'create'])->middleware(['auth', 'verified'])->name('empresa.create'); //influye el orden de las rutas !!!!!!!
Route::get('/empresa/{nombre}', [EmpresaController::class, 'index'])->middleware(['auth', 'verified'])->name('empresa.index');
Route::get('/empresa/{empresa}/edit', [EmpresaController::class, 'edit'])->middleware(['auth', 'verified'])->name('empresa.edit');

//contactar
//Route::post('/comentario',[contactaController::class, 'store'])->name('comentarios.store');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
