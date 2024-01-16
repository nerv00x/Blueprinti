<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use app

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::factory()->count(5)->create();
    }
}
