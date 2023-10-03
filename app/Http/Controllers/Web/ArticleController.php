<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\View\View;

class ArticleController extends Controller
{
    public function index(): View
    {
        return view('web.articles.index', [
            'categories' => Category::all(),
            'articles' => Article::latestWithCategories()->paginate(6),
        ]);
    }

    public function indexByCategory(Category $category): View
    {
        return view('web.articles.index', [
            'categories' => Category::all(),
            'articles' => $category->articles()->latestWithCategories()->paginate(6)
        ]);
    }

    public function show(Article $article): View
    {
        return view('web.articles.show', [
            'article' => $article->load(['categories:id,name,slug', 'author:id,name']),
        ]);
    }
}
