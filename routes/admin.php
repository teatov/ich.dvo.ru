<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProfileController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [ProfileController::class, 'show'])->name('admin');
    Route::patch('/', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('/texts', [AdminController::class, 'texts'])->name('admin.texts');
});
