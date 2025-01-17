<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModeloVehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $modelos = [
            // Toyota
            ['nombre_modelo' => 'Camry', 'marca_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_modelo' => 'Corolla', 'marca_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_modelo' => 'RAV4', 'marca_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_modelo' => 'Hilux', 'marca_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            
            // Honda
            ['nombre_modelo' => 'Civic', 'marca_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_modelo' => 'Accord', 'marca_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_modelo' => 'CR-V', 'marca_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_modelo' => 'Pilot', 'marca_id' => 2, 'created_at' => now(), 'updated_at' => now()],

            // Ford
            ['nombre_modelo' => 'Mustang', 'marca_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_modelo' => 'F-150', 'marca_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_modelo' => 'Explorer', 'marca_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_modelo' => 'Focus', 'marca_id' => 3, 'created_at' => now(), 'updated_at' => now()],

            // Chevrolet
            ['nombre_modelo' => 'Silverado', 'marca_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_modelo' => 'Malibu', 'marca_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_modelo' => 'Impala', 'marca_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_modelo' => 'Equinox', 'marca_id' => 4, 'created_at' => now(), 'updated_at' => now()],

            // Nissan
            ['nombre_modelo' => 'Altima', 'marca_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_modelo' => 'Sentra', 'marca_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_modelo' => '370Z', 'marca_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_modelo' => 'Rogue', 'marca_id' => 5, 'created_at' => now(), 'updated_at' => now()],

            // BMW
            ['nombre_modelo' => '3 Series', 'marca_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_modelo' => 'X5', 'marca_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_modelo' => 'M3', 'marca_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_modelo' => 'Z4', 'marca_id' => 6, 'created_at' => now(), 'updated_at' => now()],

            // Mercedes-Benz
            ['nombre_modelo' => 'C-Class', 'marca_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_modelo' => 'E-Class', 'marca_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_modelo' => 'S-Class', 'marca_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_modelo' => 'GLC', 'marca_id' => 7, 'created_at' => now(), 'updated_at' => now()],

            // Audi
            ['nombre_modelo' => 'A4', 'marca_id' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_modelo' => 'Q5', 'marca_id' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_modelo' => 'A6', 'marca_id' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_modelo' => 'Q7', 'marca_id' => 8, 'created_at' => now(), 'updated_at' => now()],

            // Volkswagen
            ['nombre_modelo' => 'Golf', 'marca_id' => 9, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_modelo' => 'Passat', 'marca_id' => 9, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_modelo' => 'Tiguan', 'marca_id' => 9, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_modelo' => 'Jetta', 'marca_id' => 9, 'created_at' => now(), 'updated_at' => now()],

            // Hyundai
            ['nombre_modelo' => 'Elantra', 'marca_id' => 10, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_modelo' => 'Santa Fe', 'marca_id' => 10, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_modelo' => 'Tucson', 'marca_id' => 10, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_modelo' => 'Kona', 'marca_id' => 10, 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('modelo_vehiculos')->insert($modelos);
    }
}
