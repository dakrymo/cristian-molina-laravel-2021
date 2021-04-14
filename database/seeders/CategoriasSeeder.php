<?php

namespace Database\Seeders;

use App\Models\categorias;
use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        categorias::factory()->times(1)->create([
            'nombre'            => 'Iphone'
        ]);

        categorias::factory()->times(1)->create([
            'nombre'            => 'Motorola'
        ]);

        categorias::factory()->times(1)->create([
            'nombre'            => 'Xiaomi'
        ]);

        categorias::factory()->times(1)->create([
            'nombre'            => 'Samsung'
        ]);
    }
}
