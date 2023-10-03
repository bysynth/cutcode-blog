<?php

namespace Database\Factories;

use App\Models\Admin;
use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'content' => '<p>' . implode('</p><p>',fake()->paragraphs(5)) . '</p>',
            'link' => fake()->url(),
            'author_id' => Admin::inRandomOrder()->value('id'),
            'created_at' => $dateTime,
            'updated_at' => $dateTime,
        ];
    }
}
