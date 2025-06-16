<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminNewsArticleController;
use App\Http\Controllers\Admin\ProfileController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [ProfileController::class, 'show'])->name('admin');
    Route::post('/', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('/texts', [AdminController::class, 'texts'])->name('admin.texts');

    Route::get('/news-articles', [AdminNewsArticleController::class, 'index'])->name('admin.news-articles');
    Route::get('/news-article', [AdminNewsArticleController::class, 'create'])->name('admin.news-article-create');
    Route::post('/news-article', [AdminNewsArticleController::class, 'store']);
    Route::get('/news-article/{id}', [AdminNewsArticleController::class, 'edit'])->name('admin.news-article-edit');
    Route::post('/news-article/{id}', [AdminNewsArticleController::class, 'update']);
    Route::delete('/news-article/{id}', [AdminNewsArticleController::class, 'destroy']);
});
