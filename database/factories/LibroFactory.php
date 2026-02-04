<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Libro>
 */
class LibroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' => fake()->sentence(),
            'editorial' => fake()->sentence(),
            'precio' => fake()->randomFloat(2,10, 80),
            'año_publicacion' => fake()->sentence(),
            'descripcion' => fake()->sentence()
        ];
    }
}
