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
            // Relación de la tabla vehículos con las demás tablas y creación de las columnas
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
            // Eliminar claves foráneas antes de las columnas
            $table->dropForeign(['marca_id']);
            $table->dropForeign(['modelo_id']);
            $table->dropForeign(['carroceria_id']);
            $table->dropForeign(['color_id']);
            $table->dropForeign(['ubicacion_id']);
            $table->dropForeign(['user_id']);

            // Eliminar columnas
            $table->dropColumn([
                'titulo',
                'combustible',
                'marca_id',
                'modelo_id',
                'carroceria_id',
                'color_id',
                'ubicacion_id',
                'fabricacion',
                'kilometros',
                'precio',
                'description',
                'imagen',
                'disponible',
                'user_id',
            ]);
        });
    }
};
