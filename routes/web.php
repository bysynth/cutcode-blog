<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

Route::name('site.')->group(function () {

    Route::controller(ArticleController::class)->group(function () {
        Route::get('articles', 'index')->name('articles.index');
        Route::get('articles/{article:slug}', 'show')->name('articles.show');
    });

});
