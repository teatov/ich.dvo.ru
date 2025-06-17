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

    Route::get('/staff', function () {
        return view('admin.staff');
    })->name('staff.index');

    Route::get('/course', function () {
        return view('admin.courses');
    })->name('course.index');

    Route::get('/theme', function () {
        return view('admin.themes');
    })->name('theme.index');

    Route::get('/grant', function () {
        return view('admin.grants');
    })->name('grant.index');

    Route::get('/job', function () {
        return view('admin.jobs');
    })->name('job.index');

    Route::get('/organization', function () {
        return view('admin.organizations');
    })->name('organization.index');

    Route::get('/event', function () {
        return view('admin.events');
    })->name('event.index');

    Route::get('/equipment', function () {
        return view('admin.equipments');
    })->name('equipment.index');

    Route::get('/dissertation', function () {
        return view('admin.dissertations');
    })->name('dissertation.index');

    Route::get('/patent', function () {
        return view('admin.patents');
    })->name('patent.index');
});
