<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Centre>
 */
class centreFactory extends Factory
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
            'nom' => fake()->text(30),
            'adreça' => fake()->text(50),
            'cp' => fake()->numberBetween(8010, 8020),
            'ciutat' => fake()->name(15)
        ];
    }
}
