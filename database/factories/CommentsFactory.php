<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comments>
 */
class CommentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'pseudoname' => fake()->lastName() . fake()->randomNumber(5),
            'content' => fake()->paragraph(5),
            'news_id' => fake()->numberBetween(1, 5)
        ];
    }
}
