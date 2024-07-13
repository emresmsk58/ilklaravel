<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get("/form", [\App\Http\Controllers\BookController::class, 'list'])->name('books.form')->middleware(['auth', 'verified']);
Route::post("/add", [\App\Http\Controllers\BookController::class, 'add']);
Route::get('/sil/{id}', [\App\Http\Controllers\BookController::class, 'delete'])->name('book.delete');
Route::get('/guncelle/{id}', [\App\Http\Controllers\BookController::class, 'bookUpdate'])->name('book.update');
Route::put('/guncelle/{id}', [\App\Http\Controllers\BookController::class, 'update'])->name('books.book-update');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
