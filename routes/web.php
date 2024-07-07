<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
Route::get('/', function () {
    return view('books.create');
});
Route::get("/guncelle",[\App\Http\Controllers\Emre::class,'guncelle']);
Route::get("/sil",[\App\Http\Controllers\Emre::class,'sil']);
