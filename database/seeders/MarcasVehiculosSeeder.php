<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MarcasVehiculosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $marcas = [
            ['marca' => 'Toyota'],
            ['marca' => 'Honda'],
            ['marca' => 'Ford'],
            ['marca' => 'Chevrolet'],
            ['marca' => 'Nissan'],
            ['marca' => 'BMW'],
            ['marca' => 'Mercedes-Benz'],
            ['marca' => 'Audi'],
            ['marca' => 'Volkswagen'],
            ['marca' => 'Hyundai'],
            ['marca' => 'Kia'],
            ['marca' => 'Mazda'],
            ['marca' => 'Subaru'],
            ['marca' => 'Peugeot'],
            ['marca' => 'Renault'],
            ['marca' => 'Fiat'],
            ['marca' => 'Jeep'],
            ['marca' => 'Tesla'],
            ['marca' => 'Volvo'],
            ['marca' => 'Mitsubishi'],
            ['marca' => 'Lexus'],
            ['marca' => 'Jaguar'],
            ['marca' => 'Land Rover'],
            ['marca' => 'Acura'],
            ['marca' => 'Porsche'],
            ['marca' => 'Alfa Romeo'],
            ['marca' => 'Chrysler'],
            ['marca' => 'Dodge'],
            ['marca' => 'Ferrari'],
            ['marca' => 'Lamborghini'],
            ['marca' => 'Maserati'],
            ['marca' => 'Rolls-Royce'],
            ['marca' => 'Bugatti'],
            ['marca' => 'Bentley'],
        ];

        foreach ($marcas as $marca) {
            DB::table('marcas_vehiculos')->insert([
                'marca' => $marca['marca'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
