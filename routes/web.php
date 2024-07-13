<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('books.create');
});
Route::get("/form", [\App\Http\Controllers\BookController::class, 'list'])->name('books.form');
Route::post("/add", [\App\Http\Controllers\BookController::class, 'add']);
Route::get('/sil/{id}', [\App\Http\Controllers\BookController::class, 'delete'])->name('book.delete');
Route::get('/guncelle/{id}', [\App\Http\Controllers\BookController::class, 'bookUpdate'])->name('book.update');
Route::put('/guncelle/{id}', [\App\Http\Controllers\BookController::class, 'update'])->name('books.book-update');

