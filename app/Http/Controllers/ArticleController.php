<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\View\View;

class ArticleController extends Controller
{
    public function index(): View
    {
        return view('articles.index', [
            'categories' => Category::all(),
            'articles' => Article::latestArticlesWithCategories()->paginate(6),
        ]);
    }

    public function byCategory(Category $category): View
    {
        return view('articles.index', [
            'categories' => Category::all(),
            'articles' => $category->articles()->latestArticlesWithCategories()->paginate(6)
        ]);
    }

    public function show(Article $article): View
    {
        return view('articles.show', [
            'article' => $article->load(['categories:id,name,slug', 'author:id,name']),
        ]);
    }
}
