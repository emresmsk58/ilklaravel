<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Emre;
use App\Http\Controllers\bookController;

Route::get('/', function () {
    return view('books.create');
});
Route::get("/form", [\App\Http\Controllers\bookController::class, 'list'])->name('books.form');
Route::post("/add", [\App\Http\Controllers\bookController::class, 'add']);
Route::get('/sil/{id}', [\App\Http\Controllers\bookController::class, 'delete'])->name('book.delete');
Route::get('/guncelle/{id}', [\App\Http\Controllers\bookController::class, 'bookUpdate'])->name('book.update');
Route::put('/guncelle/{id}', [\App\Http\Controllers\bookController::class, 'update'])->name('books.book-update');

