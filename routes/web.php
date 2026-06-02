<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\PageDisplayController::class, 'home'])->name('frontend.home');
Route::get('/history', [\App\Http\Controllers\PageDisplayController::class, 'history'])->name('frontend.history');

Route::get('/news', [\App\Http\Controllers\NewsArticleDisplayController::class, 'index'])->name('frontend.news.index');
Route::get('/news/{slug}', [\App\Http\Controllers\NewsArticleDisplayController::class, 'show'])->name('frontend.news.show');

Route::get('{slug}', [\App\Http\Controllers\PageDisplayController::class, 'show'])->name('frontend.page');
