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
            $table->boolean('cambio')->default(false); // 0 igual a manual
            $table->integer('num_puertas')->default(0);
            $table->foreignId('etiqueta_id')->nullable()->constrained('etiquetas')->onDelete('cascade');
            $table->boolean('iva')->default(false);
            $table->integer('cc')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vehiculos', function (Blueprint $table) {
            
            $table->dropForeign(['etiqueta_id']); // Elimina la clave foránea

            $table->dropColumn([
                'cambio',
                'num_puertas',
                'etiqueta_id',
                'iva',
                'cc'
            ]); 
        });
    }
};

