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
        Schema::create('modelo_vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_modelo');
            $table->foreignId('marca_id')->constrained('marcas_vehiculos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the mig
     */
    public function down(): void
    {
        Schema::dropIfExists('modelo_vehiculos');
    }
};
