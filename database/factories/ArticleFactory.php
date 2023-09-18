<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ArticleFactory extends Factory
{
    protected $model = Article::class;

    public function definition(): array
    {
        $dateTime = fake()->dateTimeBetween('-1 day');

        return [
            'title' => ucfirst(fake()->words(3, true)),
            'slug' => fake()->unique()->slug(3),
            'cover' => fake()->imageUrl(1510, 906),
            'content' => fake()->text(),
            'link' => fake()->url(),
            'user_id' => User::inRandomOrder()->value('id'),
            'created_at' => $dateTime,
            'updated_at' => $dateTime,
        ];
    }
}
