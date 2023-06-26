<?php

namespace Database\Seeders;

use App\Models\Newsroom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsroomSeeder extends Seeder
{
    protected $model = Newsroom::class;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Newsroom::factory()->count(10)->create();

    }
}
