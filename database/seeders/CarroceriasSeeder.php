<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CarroceriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('carrocerias_vehiculos')->insert([
            'tipo' => 'Sedán',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('carrocerias_vehiculos')->insert([
            'tipo' => 'Hatchback',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('carrocerias_vehiculos')->insert([
            'tipo' => 'SUV',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('carrocerias_vehiculos')->insert([
            'tipo' => 'Coupé',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('carrocerias_vehiculos')->insert([
            'tipo' => 'Convertible',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('carrocerias_vehiculos')->insert([
            'tipo' => 'Pickup',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('carrocerias_vehiculos')->insert([
            'tipo' => 'Minivan',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('carrocerias_vehiculos')->insert([
            'tipo' => 'Station Wagon',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
