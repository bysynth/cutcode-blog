<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest:admin'])->group(function () {
    Route::get('/', [LoginController::class, 'create'])
        ->name('login.create');
    Route::post('/login', [LoginController::class, 'store'])
        ->name('login.store');
});

Route::middleware('auth:admin')->group(function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');

    Route::delete('/logout', [LoginController::class, 'destroy'])
        ->name('logout');

    Route::resource('/categories', CategoryController::class)
        ->except(['show']);

    Route::delete('/articles/{article}/delete-cover', [ArticleController::class, 'deleteCover'])
        ->name('articles.delete-cover');
    Route::resource('/articles', ArticleController::class)
        ->except(['show']);

//    Route::get('/profile', [ProfileController::class, 'edit'])
//        ->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])
//        ->name('profile.update');
//    Route::delete('/profile/delete-avatar', [ProfileController::class, 'deleteAvatar'])
//        ->name('profile.delete-avatar');
//    Route::patch('/profile/update-password', [ProfileController::class, 'updatePassword'])
//        ->name('profile.update-password');
//
//    Route::get('/articles', [ArticleController::class, 'index'])
//        ->name('articles.index');
//    Route::get('/articles/{article}', [ArticleController::class, 'show'])
//        ->name('articles.show');
});



