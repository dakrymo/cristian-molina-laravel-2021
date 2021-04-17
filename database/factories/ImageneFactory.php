<?php

namespace Database\Factories;

use App\Models\imagene;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\producto;

class ImageneFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = imagene::class;

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
            'url'               => $this->faker->imageUrl(200,200),
            'producto_id'       => $this->faker->numberBetween(1,producto::count())
        ];
    }
}
