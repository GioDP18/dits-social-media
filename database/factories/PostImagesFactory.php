<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PostImages>
 */
class PostImagesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'users_id' => $this->faker->numberBetween(1, 12),
            'posts_id' => $this->faker->numberBetween(1, 14),
            'image' => $this->faker->imageUrl()
        ];
    }
}
