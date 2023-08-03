<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'sell_rent' => fake()->word(),
            'property_type' => fake()->word(),
            'title' => fake()->sentence(),
            'description' => fake()->text(),
            'address' => fake()->sentence(),
            'size_type' => fake()->word(),
            'size' => fake()->randomDigitNotNull(),
            'bedroom' => fake()->randomDigitNotNull(),
            'additional_bedroom' => fake()->randomDigitNotNull(),
            'bathroom' => fake()->randomDigitNotNull(),
            'furniture_electronics' => fake()->word(),
            'facility' => fake()->text(),
            'located_near' => fake()->text(),
            'price' => fake()->randomDigitNotNull(),
            'image' => fake()->text(),
            'user_id' => mt_rand(1,3)

        ];
    }
}
