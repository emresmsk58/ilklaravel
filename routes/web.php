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
Route::get("/sil",[\App\Http\Controllers\Modeloperations::class,'sil']);
Route::get("/ekle",[\App\Http\Controllers\Modeloperations::class,'ekle']);
