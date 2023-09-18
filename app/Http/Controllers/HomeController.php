<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __invoke(): View
    {
        $articles = Cache::remember('lastArticles', now()->addHours(12), function () {
            return Article::latest()->take(6)->get();
        });

        return view('home', [
            'articles' => $articles,
        ]);
    }
}
