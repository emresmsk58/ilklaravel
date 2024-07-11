<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Emre;
use App\Http\Controllers\Modeloperations;
Route::get('/', function () {
    return view('books.create');
});
Route::get("/guncelle",[\App\Http\Controllers\Emre::class,'guncelle']);
Route::get("/sil",[\App\Http\Controllers\Emre::class,'sil']);
Route::get("/liste",[\App\Http\Controllers\Modeloperations::class,'liste']);
Route::get("/guncelle",[\App\Http\Controllers\Modeloperations::class,'guncelle']);
Route::get("/sil",[\App\Http\Controllers\Modeloperations::class,'form']);
Route::get("/ekle",[\App\Http\Controllers\Modeloperations::class,'ekle']);
Route::get("/form",[\App\Http\Controllers\Modeloperations::class,'listeleme'])->name('books.form');
Route::post("/add",[\App\Http\Controllers\Modeloperations::class,'add']);
Route::get('/sil/{id}',[\App\Http\Controllers\Modeloperations::class, 'delete'])->name('book.delete');
Route::get('/guncelle/{id}',[\App\Http\Controllers\Modeloperations::class, 'bookUpdate'])->name('book.update');
Route::put('/guncelle/{id}',[\App\Http\Controllers\Modeloperations::class, 'update'])->name('books.book-update');
