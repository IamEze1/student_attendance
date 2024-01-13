<?php

namespace Database\Factories;

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
            'code' => $this->faker->unique()->word(5),
            'title' => $this->faker->unique()->stateAbbr(),
            'semester' => $this->faker->randomElement(['First', 'Second']),
            'session' => '2022/2023'
        ];
    }
}
