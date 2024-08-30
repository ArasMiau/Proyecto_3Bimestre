<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class ProductoFactory extends Factory
{
    protected $model = Producto::class;

    public function definition()
    {
        return [
            'Nombre' => $this->faker->word(),
            'PrecioUnitario' => $this->faker->numberBetween(100, 1000),
            'stock' => $this->faker->numberBetween(0, 100),
            'Descripcion' => $this->faker->sentence(),
        ];
    }
}
