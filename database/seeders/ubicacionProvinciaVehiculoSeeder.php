<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UbicacionProvinciaVehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provincias = [
            ['provincia' => 'Álava', 'codigo_postal' => '01000', 'created_at' => now(), 'updated_at' => now()],
            ['provincia' => 'Albacete', 'codigo_postal' => '02000', 'created_at' => now(), 'updated_at' => now()],
            ['provincia' => 'Alicante', 'codigo_postal' => '03000', 'created_at' => now(), 'updated_at' => now()],
            ['provincia' => 'Almería', 'codigo_postal' => '04000', 'created_at' => now(), 'updated_at' => now()],
            ['provincia' => 'Asturias', 'codigo_postal' => '33000', 'created_at' => now(), 'updated_at' => now()],
            ['provincia' => 'Ávila', 'codigo_postal' => '05000', 'created_at' => now(), 'updated_at' => now()],
            ['provincia' => 'Badajoz', 'codigo_postal' => '06000', 'created_at' => now(), 'updated_at' => now()],
            ['provincia' => 'Baleares', 'codigo_postal' => '07000', 'created_at' => now(), 'updated_at' => now()],
            ['provincia' => 'Barcelona', 'codigo_postal' => '08000', 'created_at' => now(), 'updated_at' => now()],
            ['provincia' => 'Burgos', 'codigo_postal' => '09000', 'created_at' => now(), 'updated_at' => now()],
            ['provincia' => 'Cáceres', 'codigo_postal' => '10000', 'created_at' => now(), 'updated_at' => now()],
            ['provincia' => 'Cádiz', 'codigo_postal' => '11000', 'created_at' => now(), 'updated_at' => now()],
            ['provincia' => 'Cantabria', 'codigo_postal' => '39000', 'created_at' => now(), 'updated_at' => now()],
            ['provincia' => 'Castellón', 'codigo_postal' => '12000', 'created_at' => now(), 'updated_at' => now()],
            ['provincia' => 'Ciudad Real', 'codigo_postal' => '13000', 'created_at' => now(), 'updated_at' => now()],
            ['provincia' => 'Córdoba', 'codigo_postal' => '14000', 'created_at' => now(), 'updated_at' => now()],
            ['provincia' => 'Cuenca', 'codigo_postal' => '16000', 'created_at' => now(), 'updated_at' => now()],
            ['provincia' => 'Girona', 'codigo_postal' => '17000', 'created_at' => now(), 'updated_at' => now()],
            ['provincia' => 'Granada', 'codigo_postal' => '18000', 'created_at' => now(), 'updated_at' => now()],
            ['provincia' => 'Guadalajara', 'codigo_postal' => '19000', 'created_at' => now(), 'updated_at' => now()],
            ['provincia' => 'Guipúzcoa', 'codigo_postal' => '20000', 'created_at' => now(), 'updated_at' => now()],
            ['provincia' => 'Huelva', 'codigo_postal' => '21000', 'created_at' => now(), 'updated_at' => now()],
            ['provincia' => 'Huesca', 'codigo_postal' => '22000', 'created_at' => now(), 'updated_at' => now()],
            ['provincia' => 'Jaén', 'codigo_postal' => '23000', 'created_at' => now(), 'updated_at' => now()],
            ['provincia' => 'La Coruña', 'codigo_postal' => '15000', 'created_at' => now(), 'updated_at' => now()],
            ['provincia' => 'La Rioja', 'codigo_postal' => '26000', 'created_at' => now(), 'updated_at' => now()],
            ['provincia' => 'Las Palmas', 'codigo_postal' => '35000', 'created_at' => now(), 'updated_at' => now()],
            ['provincia' => 'León', 'codigo_postal' => '24000', 'created_at' => now(), 'updated_at' => now()],
            ['provincia' => 'Lleida', 'codigo_postal' => '25000', 'created_at' => now(), 'updated_at' => now()],
            ['provincia' => 'Lugo', 'codigo_postal' => '27000', 'created_at' => now(), 'updated_at' => now()],
            ['provincia' => 'Madrid', 'codigo_postal' => '28000', 'created_at' => now(), 'updated_at' => now()],
            ['provincia' => 'Málaga', 'codigo_postal' => '29000', 'created_at' => now(), 'updated_at' => now()],
            ['provincia' => 'Murcia', 'codigo_postal' => '30000', 'created_at' => now(), 'updated_at' => now()],
            ['provincia' => 'Navarra', 'codigo_postal' => '31000', 'created_at' => now(), 'updated_at' => now()],
            ['provincia' => 'Ourense', 'codigo_postal' => '32000', 'created_at' => now(), 'updated_at' => now()],
            ['provincia' => 'Palencia', 'codigo_postal' => '34000', 'created_at' => now(), 'updated_at' => now()],
            ['provincia' => 'Pontevedra', 'codigo_postal' => '36000', 'created_at' => now(), 'updated_at' => now()],
            ['provincia' => 'Salamanca', 'codigo_postal' => '37000', 'created_at' => now(), 'updated_at' => now()],
            ['provincia' => 'Santa Cruz de Tenerife', 'codigo_postal' => '38000', 'created_at' => now(), 'updated_at' => now()],
            ['provincia' => 'Segovia', 'codigo_postal' => '40000', 'created_at' => now(), 'updated_at' => now()],
            ['provincia' => 'Sevilla', 'codigo_postal' => '41000', 'created_at' => now(), 'updated_at' => now()],
            ['provincia' => 'Soria', 'codigo_postal' => '42000', 'created_at' => now(), 'updated_at' => now()],
            ['provincia' => 'Tarragona', 'codigo_postal' => '43000', 'created_at' => now(), 'updated_at' => now()],
            ['provincia' => 'Teruel', 'codigo_postal' => '44000', 'created_at' => now(), 'updated_at' => now()],
            ['provincia' => 'Toledo', 'codigo_postal' => '45000', 'created_at' => now(), 'updated_at' => now()],
            ['provincia' => 'Valencia', 'codigo_postal' => '46000', 'created_at' => now(), 'updated_at' => now()],
            ['provincia' => 'Valladolid', 'codigo_postal' => '47000', 'created_at' => now(), 'updated_at' => now()],
            ['provincia' => 'Vizcaya', 'codigo_postal' => '48000', 'created_at' => now(), 'updated_at' => now()],
            ['provincia' => 'Zamora', 'codigo_postal' => '49000', 'created_at' => now(), 'updated_at' => now()],
            ['provincia' => 'Zaragoza', 'codigo_postal' => '50000', 'created_at' => now(), 'updated_at' => now()],
            ['provincia' => 'Ceuta', 'codigo_postal' => '51000', 'created_at' => now(), 'updated_at' => now()],
            ['provincia' => 'Melilla', 'codigo_postal' => '52000', 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('ubicacion_provincia_vehiculos')->insert($provincias);
    }
}
