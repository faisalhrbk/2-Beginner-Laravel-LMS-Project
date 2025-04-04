<?php

namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->word(),
            'category' => fake()->randomElement(['computer', 'biology', 'arts', 'engineering']),
            'price' => fake()->numberBetween(100, 1000),
            'status' => fake()->randomElement(['active', 'inactive']),
            'description' => fake()->sentence(10),
            'teacher_id' => fake()->randomElement(Teacher::pluck('id')->toArray()),

        ];
    }
}
