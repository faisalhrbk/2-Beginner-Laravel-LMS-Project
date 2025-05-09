<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->email(),
            'age' => fake()->numberBetween(10, 100),
            'address' => fake()->address(),
            'class' => fake()->numberBetween(8, 16),
            'password' => bcrypt('123'),
        ];
    }
}
