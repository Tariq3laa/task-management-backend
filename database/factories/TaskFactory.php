<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'         => $this->faker->sentence(3), // Generate a random title
            'description'   => $this->faker->paragraph, // Generate a random description
            'status'        => $this->faker->randomElement(['pending', 'in-progress', 'completed']), // Random status
        ];
    }
}
