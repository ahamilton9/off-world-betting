<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('schedule', function () {
    return Inertia::render('Schedule', [
        'user' => auth()->user()
    ]);
})->middleware(['auth', 'verified'])->name('schedule');

Route::get('roster', function () {
    return Inertia::render('Roster', [
        'user' => auth()->user()
    ]);
})->middleware(['auth', 'verified'])->name('roster');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
