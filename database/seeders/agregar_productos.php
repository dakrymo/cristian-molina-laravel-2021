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
        producto::factory()->times(1)->create([
            'nombre'             => 'iPhone 11',
            'precio'             => '2699000',
            'descripcion'        => 'Procesador Apple A13 e incorpora una doble cámara con gran angular y teleobjetivo.',
            'Tag'                => 'iph',
            'categoria_id'       => '1'
        ]);
  
        producto::factory()->times(1)->create([
            'nombre'             => 'iPhone 12 Pro',
            'precio'             => '15175900',
            'descripcion'        => 'Super Retina XDR display, 5G cellular, A14 Bionic chip Fastest chip in a smartphone, Pro camera system Ultra Wide, Wide, Telephoto, LiDAR Scanner For Night mode portraits and next‑level AR y Compatible con MagSafe accessories',
            'Tag'                => 'iph',
            'categoria_id'       => '1'
        ]);
    
        producto::factory()->times(1)->create([
            'nombre'             => 'iPhone SE',
            'precio'             => '6140900',
            'descripcion'        => 'El iPhone SE viene con el chip A13 Bionic, modo Retrato, video 4K, Touch ID, pantalla Retina HD y una batería de gran duración en un diseño de 4,7”.',
            'Tag'                => 'iph',
            'categoria_id'       => '1'
        ]);
    }
}
