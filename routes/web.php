<?php

use App\Http\Controllers\VetementController;
use Illuminate\Support\Facades\Route;

// Route::get('/', [BookController::class, 'index'])->name('home');

Route::get('/', [VetementController::class, 'index'])->name('home');
Route::resource('vetements', VetementController::class);

// Route::get('/', function () {
//     return view('pages.index');
// })->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
