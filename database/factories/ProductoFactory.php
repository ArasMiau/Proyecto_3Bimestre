<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductoFactory extends Factory
{
    /**
     * El nombre del modelo asociado a la fábrica.
     *
     * @var string
     */
    protected $model = \App\Models\Producto::class;

    /**
     * Defina los atributos predeterminados de la fábrica.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nombre' => $this->faker->word,
            'PrecioUnitario' => $this->faker->numberBetween(100, 10000),
            'stock' => $this->faker->numberBetween(1, 1000),
            'Descripcion' => $this->faker->sentence(),
        ];
    }
}
