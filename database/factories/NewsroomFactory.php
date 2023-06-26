<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Newsroom>
 */
class NewsroomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // $accessKey = config('app.unsplash_key');
        // $category = Category::all()->random()->name;
        // $searchQuery = urlencode($category . ' news');
        // $url = 'https://api.unsplash.com/photos/random?client_id='.$accessKey.'&query='.$searchQuery;
        // $response = json_decode(file_get_contents($url));

        $categories = Category::all();
        $title = $this->faker->sentence(5);

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'overview' => $this->faker->realtext(),
            'body' => $this->faker->realtext(),
            'user_id' => User::all()->random()->id,
            'active' => $this->faker->boolean(true),
            // 'featured_image' => $response->urls->regular,
            'featured_image' => $this->faker->imageUrl(300, 300),
            'user_id' => User::all()->unique()->random()->id,
            'category_id' => $categories->random()->id,
            'created_at' => now(),
            'updated_at' => now(),

            //
        ];
    }
}
