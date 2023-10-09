<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Feed;
use App\Models\Post;
use App\Models\Reel;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(200)->create();
        Post::factory(200)->create();
        Reel::factory(200)->create();
        Feed::factory(200)->create();
    }
}
