<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use A17\Twill\Facades\TwillRoutes;

Route::get('/', [\App\Http\Controllers\PageDisplayController::class, 'home'])->name('frontend.home');
Route::get('{slug}', [\App\Http\Controllers\PageDisplayController::class, 'show'])->name('frontend.page');

Route::get('/news/{slug}', [\App\Http\Controllers\NewsArticleDisplayController::class, 'show'])->name('frontend.newsArticle');
