<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumnat>
 */
class AlumnatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // crea els camps de la taula amb el tipus del valor
        return [
            'nom' => fake()->name(),
            'cognom' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
        ];
    }
}
