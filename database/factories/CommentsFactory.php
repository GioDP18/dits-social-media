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
            'users_id' => $this->faker->numberBetween(1, 10),
            'posts_id' => $this->faker->numberBetween(1, 10),
            'comment' => $this->faker->sentence(),
            'image' => $this->faker->imageUrl()
        ];
    }
}
