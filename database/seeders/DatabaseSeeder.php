<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\agregar_empleados_iniciales;
use Database\Seeders\agregar_empresas_iniciales;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this -> call ('agregar_empresas_iniciales'::class);
        $this -> call ('agregar_empleados_iniciales'::class);
        $this -> call ('agregar_empresas_adicionales'::class);
        $this -> call ('agregar_empleados_adicionales'::class);
    }
}
