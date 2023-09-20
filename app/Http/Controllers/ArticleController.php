<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\View\View;

class ArticleController extends Controller
{
    public function index(): View
    {
        $articles = Article::with('categories')
            ->latest()
            ->paginate(6);

        return view('articles.index', [
            'articles' => $articles,
        ]);
    }

    public function show(Article $article): View
    {
        return view('articles.show', [
            'article' => $article->load(['categories', 'author' => function(Builder $builder) {
                $builder->select(['id', 'name']);
            }]),
        ]);
    }
}
