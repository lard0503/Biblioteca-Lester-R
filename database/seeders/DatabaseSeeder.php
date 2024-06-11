<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {      
        \App\Models\Careers::factory()->create(
            [
                'codigo' => '109',
                'nombre' => 'Ingenieria en Sistemas',
                'descripcion' => 'Carrera de Ingenieria en Sistemas'
            ]
        );
        \App\Models\Careers::factory()->create(
            [
                'codigo' => '110',
                'nombre' => 'Ingenieria Industrial',
                'descripcion' => 'Carrera de Ingenieria Industrial'
            ]
        );
        \App\Models\Careers::factory()->create(
            [
                'codigo' => '111',
                'nombre' => 'Arquitectura',
                'descripcion' => 'Carrera de Arquitectura'
            ]
        );
        \App\Models\Careers::factory()->create(
            [
                'codigo' => '112',
                'nombre' => 'Ingenieria Civil',
                'descripcion' => 'Carrera de Ingenieria Civil'
            ]
        );
    }
}
