<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', [BookController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
