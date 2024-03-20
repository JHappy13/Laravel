<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Image;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Tag::factory(10)->create();
        Category::factory(10)->create();
        
        User::factory(10)
            ->has(Post::factory()->count(3))
            ->create();
                  \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
  

        $posts = Post::all();
        foreach ($posts as $post) {
            Image::factory()->create(
                [
                    'imageable_id'=> $post->id,
                    'imageable_type' => Post::class
                ]
                );
        }

    }
}
