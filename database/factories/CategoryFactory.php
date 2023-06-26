<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->sentence(5);

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'overview' => $this->faker->text(),
            'body' => $this->faker->text(),
            'description' => $this->faker->text(),
            'featured_image' => $this->faker->imageUrl(300, 300),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
