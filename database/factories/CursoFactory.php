<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->title(),
            'fechaInicio' => fake()->dateTimeThisYear(),
            'fechaFin' => fake()->dateTimeBetween('now', '+6 months')
        ];
    }
}
