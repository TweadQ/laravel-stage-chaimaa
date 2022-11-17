<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VetementController;
use App\Http\Controllers\BijouxPretController;
use App\Http\Controllers\BijouxPersonnalisableController;


Route::get('/', [VetementController::class, 'index'])->name('home');
Route::get('/homme', [VetementController::class, 'homme'])->name('homme');
Route::get('/femme', [VetementController::class, 'femme'])->name('femme');
Route::get('/enfant', [VetementController::class, 'enfant'])->name('enfant');
Route::get('/bijouxPret', [BijouxPretController::class, 'bijouxPret'])->name('bijouxPret');
Route::get('/bijouxPersonnalisable', [BijouxPersonnalisableController::class, 'bijouxPersonnalisable'])->name('bijouxPersonnalisable');

Route::resource('vetements', VetementController::class);
Route::resource('bijouxPrets', BijouxPretController::class);
Route::resource('bijouxPersonnalisables', BijouxPersonnalisableController::class);

Route::get('create', [VetementController::class, 'create'])->name('create');
Route::get('update', [VetementController::class, 'update'])->name('update');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/homme', function () {
//     return view('pages.homme');
// })->name('homme');


require __DIR__.'/auth.php';
