<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle,
            'salary' => fake()->randomElement(['R50,000', 'R65,000', 'R38,000', 'R175,00', 'R35,000', 'R26,000', 'R45,000']),
            'location' => 'Remote',
            'schedule' => 'Full Time',
            'url' => fake()->url,
            'featured' => false
        ];
    }
}
