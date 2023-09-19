<?php

namespace App\Http\Controllers;

use App\Models\Article;
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
}
