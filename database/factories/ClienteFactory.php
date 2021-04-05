<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cliente::class;

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
            'cedula'            =>$this->faker->numberBetween(2000000,1099999999),
            'nombre'            =>$this->faker->name(),
            'email'             =>$this->faker->email(),
            'telefono'          =>$this->faker->numberBetween(3002000000,3217999999),
            'direccion'         =>$this->faker->address(),
        ];
    }
}
