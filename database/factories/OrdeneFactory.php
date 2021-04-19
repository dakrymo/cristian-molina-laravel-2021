<?php

namespace Database\Factories;

use App\Models\Ordene;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\producto;
use App\Models\User;

class OrdeneFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ordene::class;

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
            'id_cliente'        => $this->faker->numberBetween(1,User::count()),
            'id_producto'       => $this->faker->numberBetween(1,producto::count()),
            'fecha'             => date('Y-m-d H:m:s'),
        ];
    }
}
