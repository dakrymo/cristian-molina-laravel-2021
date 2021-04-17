<?php

namespace Database\Seeders;

use App\Models\categoria;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        categoria::factory()->times(1)->create([
            'nombre'            => 'Iphone'
        ]);

        categoria::factory()->times(1)->create([
            'nombre'            => 'Motorola'
        ]);

        categoria::factory()->times(1)->create([
            'nombre'            => 'Xiaomi'
        ]);

        categoria::factory()->times(1)->create([
            'nombre'            => 'Samsung'
        ]);
    }
}
