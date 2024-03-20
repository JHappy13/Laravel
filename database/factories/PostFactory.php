<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
    public function definition(): array
    {
        $nom = fake()->unique()->sentence();
        return [
            'name' => $nom,
            'slug' => Str::slug($nom),
            'extract' => fake()->text(),
            'body' => fake()->text(2000),
            'status' => fake()->randomElement([1,2]),
            'user_id' => User::inRandomOrder()->first(),
            'category_id' => Category::inRandomOrder()->first()
        ];
    }
}
