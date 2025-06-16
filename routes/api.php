<?php

use App\Http\Controllers\EditTextController;
use Illuminate\Support\Facades\Route;

Route::name('api.')->group(function () {
    Route::post('/edit-text', EditTextController::class)->name('edit-text');
});
