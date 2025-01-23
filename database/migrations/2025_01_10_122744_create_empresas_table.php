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
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->foreignId('direccion_id')->constrained('ubicacion_provincia_vehiculos')->onDelete('cascade');
            $table->string('telefono');
            $table->string('email');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::table('empresas', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['direccion_id']);

            $table->dropColumn([
                'nombre',
                'direccion_id',
                'telefono',
                'email',
                'user_id'
            ]);
        });



        Schema::dropIfExists('empresas');
    }
};
