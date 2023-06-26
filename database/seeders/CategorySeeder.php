<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Generator;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Feature',
            'Press Release',
            'Popular',
        ];

        foreach ($categories as $category) {
            Category::create([
                'title' => $category,
                'slug' => Str::slug($category),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Category::factory()->count(3)->create();
    }
}
