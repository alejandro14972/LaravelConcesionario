<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\MarcasVehiculosSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /* $this->call(MarcasVehiculosSeeder::class);
        $this->call(CarroceriasSeeder::class);
        $this->call(UbicacionProvinciaVehiculoSeeder::class);
        $this->call(modeloVehiculoSeeder::class);
        $this->call(ColorVehiculoSeeder::class); 
        $this->call(EtiquetasSeeder::class);*/

        $this->call(VehiculoSeeder::class);
    }
}
