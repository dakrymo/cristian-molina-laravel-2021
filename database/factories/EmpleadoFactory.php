<?php

namespace Database\Factories;

use App\Models\Empleado;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Empresa;

class EmpleadoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Empleado::class;

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
            'codigo'            => $this->faker->numberBetween(00000,99999),
            'nombre'            => $this->faker->name(),
            'lugar_nacimiento'  => $this->faker->city(),
            'fecha_nacimiento'  => $this->faker->dateTimeThisCentury(),
            'telefono'          => $this->faker->randomNumber(),
            'cargo'             => $this->faker->jobTitle(),
            'estado'            => $this->faker->randomElement(['contratado','suspendido','prueba']),
            'empresa_id'        => $this->faker->numberBetween(1,Empresa::count())
        ];
    }
}
