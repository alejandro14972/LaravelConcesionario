<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('vehiculos', function (Blueprint $table) {
//relacion de la tabla vehiculos con las demas tablas y creacion de las columnas
            $table->string('titulo');
            $table->string('combustible');
            $table->foreignId('marca_id')->constrained('marcas_vehiculos', 'id')->onDelete('cascade');
            $table->foreignId('modelo_id')->constrained('modelo_vehiculos')->onDelete('cascade');
            $table->foreignId('carroceria_id')->constrained('carrocerias_vehiculos')->onDelete('cascade');
            $table->foreignId('color_id')->constrained('color_vehiculo')->onDelete('cascade');
            $table->foreignId('ubicacion_id')->constrained('ubicacion_provincia_vehiculos')->onDelete('cascade');
            $table->date('fabricacion');
            $table->integer('kilometros');
            $table->float('precio');
            $table->text('description');
            $table->string('imagen');
            $table->boolean('disponible')->default(1);
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vehiculos', function (Blueprint $table) {
            $table->dropColumn(['titulo', 'combustible', 'marca_id', 'modelo_id', 'carroceria_id', 'color_id', 
            'ubicacion_id', 'fabricacion', 'precio', 'description', 'imagen', 'disponible', 'user_id']);
        });
    }
};
