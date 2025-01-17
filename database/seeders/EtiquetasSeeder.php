<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EtiquetasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $etiquetas = [
            [
                'imagen' => 'eco.svg', // Asegúrate de que este archivo exista en public/
                'nombre' => 'Etiqueta ECO',
                'valor' => 1,
                'descripcion' => 'Etiqueta para productos ecológicos',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'imagen' => 'c.svg', // Asegúrate de que este archivo exista en public/
                'nombre' => 'Etiqueta C',
                'valor' => 2,
                'descripcion' => 'Etiqueta para productos con bajo contenido de cromo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'imagen' => 'b.svg', // Asegúrate de que este archivo exista en public/
                'nombre' => 'Etiqueta B',
                'valor' => 3,
                'descripcion' => 'Etiqueta para productos con bajo contenido de cromo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'imagen' => '0.svg', // Asegúrate de que este archivo exista en public/
                'nombre' => 'Etiqueta 0 Emisiones',
                'valor' => 4,
                'descripcion' => 'Etiqueta para productos con 0 emisiones',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'imagen' => 'sin.svg', // Asegúrate de que este archivo exista en public/
                'nombre' => 'Sin Etiqueta',
                'valor' => 5,
                'descripcion' => 'Etiqueta con restricciones',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('etiquetas')->insert($etiquetas);
    }
}
