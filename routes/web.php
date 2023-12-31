<?php

use App\Http\Controllers\Web\ArticleController;
use App\Http\Controllers\Web\Auth\LoginController;
use App\Http\Controllers\Web\Auth\NewPasswordController;
use App\Http\Controllers\Web\Auth\PasswordResetController;
use App\Http\Controllers\Web\Auth\RegisterController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

Route::redirect('/articles/category', '/articles');

Route::middleware('guest:web')->group(function () {
    Route::get('/login', [LoginController::class, 'create'])
        ->name('login');
    Route::post('/login', [LoginController::class, 'store'])
        ->name('login');
    Route::get('/register', [RegisterController::class, 'create'])
        ->name('register');
    Route::post('/register', [RegisterController::class, 'store'])
        ->name('register');
    Route::get('/forgot-password', [PasswordResetController::class, 'create'])
        ->name('password.request');
    Route::post('/forgot-password', [PasswordResetController::class, 'store'])
        ->name('password.email');
    Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');
    Route::post('/reset-password', [NewPasswordController::class, 'store'])
        ->name('password.store');
});

Route::middleware('auth:web')->group(function () {
    Route::delete('/logout', [LoginController::class, 'destroy'])
        ->name('logout');

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');
    Route::delete('/profile/delete-avatar', [ProfileController::class, 'deleteAvatar'])
        ->name('profile.delete-avatar');
    Route::patch('/profile/update-password', [ProfileController::class, 'updatePassword'])
        ->name('profile.update-password');
});

Route::get('/articles', [ArticleController::class, 'index'])
    ->name('articles.index');
Route::get('/articles/{article:slug}', [ArticleController::class, 'show'])
    ->name('articles.show');
Route::get('/articles/category/{category:slug}', [ArticleController::class, 'indexByCategory'])
    ->name('articles.indexByCategory');
