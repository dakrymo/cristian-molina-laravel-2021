<?php

namespace Database\Seeders;

use App\Models\cliente;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class agregar_clientes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        cliente::factory()->count(5)->create();
    }
}
