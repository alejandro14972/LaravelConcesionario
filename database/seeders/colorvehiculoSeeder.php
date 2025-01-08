<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorVehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $colores = [
            ['color' => 'Rojo', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Azul', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Verde', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Negro', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Blanco', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Gris', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Amarillo', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Naranja', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Morado', 'created_at' => now(), 'updated_at' => now()],
            ['color' => 'Marrón', 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('color_vehiculo')->insert($colores);
    }
}