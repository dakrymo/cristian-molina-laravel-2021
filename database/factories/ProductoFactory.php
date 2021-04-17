<?php

namespace Database\Factories;

use App\Models\categoria;
use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class ProductoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Producto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'created_at'        => date('Y-m-d H:m:s'),
            'updated_at'        => date('Y-m-d H:m:s'),
            'codigo'            =>$this -> faker->numberBetween(0000,9999),
            'nombre'            =>$this -> faker->deviceModelName(),
            'precio'            =>$this -> faker->numberBetween(700000,2500000),
            'descripcion'       =>$this -> faker->realText($maxNbChars = 10),
            'Tag'               =>$this -> faker->word(),
            'categoria_id'      =>$this -> faker->numberBetween(1,categoria::count())

        ];
    }
}
