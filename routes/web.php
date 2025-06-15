<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/history', function () {
    return view('history');
})->name('history');

Route::get('/staff', function () {
    return view('staff');
})->name('staff');

Route::get('/themes', function () {
    return view('themes');
})->name('themes');

Route::get('/grants', function () {
    return view('grants');
})->name('grants');

Route::get('/jobs', function () {
    return view('jobs');
})->name('jobs');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/achievements', function () {
    return view('achievements');
})->name('achievements');

Route::get('/events', function () {
    return view('events');
})->name('events');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/equipment', function () {
    return view('equipment');
})->name('equipment');

Route::get('/dissertations', function () {
    return view('dissertations');
})->name('dissertations');

Route::get('/patents', function () {
    return view('patents');
})->name('patents');

Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');

Route::get('/event', function () {
    return view('event');
})->name('event');
Route::get('/achievement', function () {
    return view('achievement');
})->name('achievement');
Route::get('/dvcsi', function () {
    return view('dvcsi');
})->name('dvcsi');
Route::get('/grant-category', function () {
    return view('grant-category');
})->name('grant-category');
Route::get('/theme', function () {
    return view('theme');
})->name('theme');
Route::get('/course', function () {
    return view('course');
})->name('course');
Route::get('/staff-member', function () {
    return view('staff-member');
})->name('staff-member');
Route::get('/grant', function () {
    return view('grant');
})->name('grant');

require __DIR__.'/admin.php';
require __DIR__.'/auth.php';
