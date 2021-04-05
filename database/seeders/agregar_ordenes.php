<?php

namespace Database\Seeders;

use App\Models\ordene;
use Illuminate\Database\Seeder;

class agregar_ordenes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ordene::factory()->count(1)->create();
    }
}
