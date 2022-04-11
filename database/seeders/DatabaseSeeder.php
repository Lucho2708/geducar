<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Tag::factory(5)->create();
        \App\Models\Post::factory(10)->create();
        \App\Models\Video::factory(10)->create();
        \App\Models\PostTag::factory(10)->create();
        \App\Models\TagVideo::factory(10)->create();
    }
}
