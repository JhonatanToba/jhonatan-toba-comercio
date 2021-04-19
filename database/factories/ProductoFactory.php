<?php

namespace Database\Factories;

use App\Models\producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = producto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "created_at" => date("Y-m-d H:m:s"),
            "updated_at" => date("Y-m-d H:m:s"),
            "nombre" => $this->faker->name(),
            "precio" => $this->faker->randomNumber(),
            "activo" => $this->faker->numberBetween(0,1),
            "trending" => $this->faker->numberBetween(0,1),
            "fecha_lanzamiento" => date("Y-m-d H:m:s")
        ];
    }
}
