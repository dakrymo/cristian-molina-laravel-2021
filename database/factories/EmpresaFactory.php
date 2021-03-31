<?php

namespace Database\Factories;

use App\Models\Empresa;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpresaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Empresa::class;

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
        'nombre'            => $this->faker->company(),
        'nit'               => $this->faker->numberBetween(900000000,999999999)
        ];
    }
}
