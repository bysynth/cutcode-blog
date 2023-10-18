<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Articles\StoreRequest;
use App\Http\Requests\Admin\Articles\UpdateRequest;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ArticleController extends Controller
{
    public function index(): View
    {
        return view('admin.articles.index', [
            'articles' => Article::with(['author:id,name', 'categories:id,name'])
                ->latest()
                ->paginate(10),
        ]);
    }

    public function create(): View
    {
        return view('admin.articles.create', [
            'categories' => Category::orderBy('id')
                ->pluck('name', 'id')
                ->toArray(),
        ]);
    }

    public function store(StoreRequest $request): RedirectResponse
    {
        $data = $request->safe()->except('categories');
        $categories = Arr::flatten($request->safe()->only('categories'));

        if ($request->hasFile('cover')) {
            $data['cover'] = Storage::putFile('covers', $request->file('cover'));
        }

        $article = Article::create($data);
        $article->categories()->sync($categories);

        return to_route('admin.articles.index')
            ->with('crudMessage', 'Статья успешно создана!');
    }

    public function edit(Article $article)
    {
        return view('admin.articles.edit', [
            'article' => $article,
            'categories' => Category::orderBy('id')
                ->pluck('name', 'id')
                ->toArray(),
        ]);
    }

    public function update(UpdateRequest $request, Article $article)
    {
        $data = $request->safe()->except('categories');
        $categories = Arr::flatten($request->safe()->only('categories'));

        if ($request->hasFile('cover')) {

            if ($article->cover) {
                Storage::delete($article->cover);
            }

            $data['cover'] = Storage::putFile('covers', $request->file('cover'));
        }

        $article->update($data);
        $article->categories()->sync($categories);

        return to_route('admin.articles.index')
            ->with('crudMessage', 'Статья успешно обновлена!');
    }

    public function destroy(Article $article)
    {
        if ($article->cover) {
            Storage::delete($article->cover);
        }

        $article->delete();

        return to_route('admin.articles.index')
            ->with('crudMessage', 'Статья успешно удалена!');
    }

    public function deleteCover(Article $article): void
    {
        if ($article->cover) {
            Storage::delete($article->cover);
            $article->update(['cover' => null]);
        }
    }
}
