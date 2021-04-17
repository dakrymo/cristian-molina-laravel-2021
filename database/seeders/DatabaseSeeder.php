<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this -> call ('agregar_clientes'::class);
        $this -> call ('agregar_ordenes'::class);
        $this -> call ('agregar_productos'::class);
        $this -> call ('ImageneSeeder'::class);
        $this -> call ('CategoriaSeeder'::class);
    }
}
