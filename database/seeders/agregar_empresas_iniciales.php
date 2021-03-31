<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class agregar_empresas_iniciales extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    
    {
        $faker = Faker::create('es_ES');
for ($i=0; $i <20 ; $i++) { 
    DB::table('empresas')->insert([
        'created_at'        => date('Y-m-d H:m:s'),
        'updated_at'        => date('Y-m-d H:m:s'),
        'nombre'            => $faker->company,
        'nit'               => $faker->numberBetween(900000000,999999999),
    ]);
}

        
        }
    }