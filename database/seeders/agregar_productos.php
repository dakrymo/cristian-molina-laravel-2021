<?php

namespace Database\Seeders;

use App\Models\producto;
use Illuminate\Database\Seeder;

class agregar_productos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        producto::factory()->count(5)->create();
    }
}
