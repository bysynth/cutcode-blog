<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

Route::redirect('/articles/category', '/articles');

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'create'])
        ->name('login');
    Route::post('/login', [AuthController::class, 'store'])
        ->name('login');
    Route::get('/register', [RegisterController::class, 'create'])
        ->name('register');
    Route::post('/register', [RegisterController::class, 'store'])
        ->name('register');
});

Route::get('/articles', [ArticleController::class, 'index'])
    ->name('articles.index');
Route::get('/articles/{article:slug}', [ArticleController::class, 'show'])
    ->name('articles.show');
Route::get('/articles/category/{category:slug}', [ArticleController::class, 'indexByCategory'])
    ->name('articles.indexByCategory');
