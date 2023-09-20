<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        $categories = Category::factory(5)->create();

        Article::factory(30)
            ->create()
            ->each(fn(Article $article) => $article
                ->categories()
                ->sync($categories->random(rand(1, 5)))
            );
    }
}
