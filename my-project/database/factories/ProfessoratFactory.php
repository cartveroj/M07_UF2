<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Professorat>
 */
class ProfessoratFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // retorna valors fake per omplir els camps de la taula
        return [
            'nom' => fake()->name(),
            'cognom' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
        ];
    }
}
