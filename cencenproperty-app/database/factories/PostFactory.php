<?php

namespace Database\Factories;

use Database\Factories\PostFactory;
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


    public static function slugify($text, string $divider = '-')
        {
        // replace non letter or digits by divider
        $text = preg_replace('~[^\pL\d]+~u', $divider, $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, $divider);

        // remove duplicate divider
        $text = preg_replace('~-+~', $divider, $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }

        return $text;
        }
    
    public function definition()
    {
        $title = fake()->sentence();

        return [
            'sell_rent' => fake()->word(),
            'property_type' => fake()->word(),
            'title' => $title,
            'slug' => PostFactory::slugify($title),
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
