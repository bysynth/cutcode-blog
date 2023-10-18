<?php

namespace App\Observers;

use Illuminate\Support\Facades\Cache;

class ArticleObserver
{
    public function created(): void
    {
        $this->clearLastArticlesCache();
    }

    public function deleted(): void
    {
        $this->clearLastArticlesCache();
    }

    private function clearLastArticlesCache(): void
    {
        Cache::forget('lastArticles');
    }

}
