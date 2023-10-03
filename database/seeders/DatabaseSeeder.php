<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Admin;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Admin::create([
            'name' => 'Super Admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('12345')
        ]);

        Admin::factory(3)->create();

        $categories = Category::factory(5)->create();

        Article::factory(30)
            ->create()
            ->each(fn(Article $article) => $article
                ->categories()
                ->sync($categories->random(rand(1, 5)))
            );
    }
}
