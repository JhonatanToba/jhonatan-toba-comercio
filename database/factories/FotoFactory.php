<?php

namespace Database\Factories;

use App\Models\foto;
use App\Models\producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class FotoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = foto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "create_at" => date("Y-m-d H:m:s"),
            "update_at" => date("Y-m-d H:m:s"),
            "url" => $this->faker->imageUrl(300,300),
            "productos_id" => $this->faker->numberBetween(1,producto::count())
        ];
    }
}
