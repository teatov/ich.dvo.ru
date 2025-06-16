<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminNewsArticleController;
use App\Http\Controllers\Admin\ProfileController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/', [ProfileController::class, 'show'])->name('index');
    Route::post('/', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('/texts', [AdminController::class, 'texts'])->name('texts');

    Route::resource('news-article', AdminNewsArticleController::class);
});
