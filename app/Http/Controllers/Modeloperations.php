<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;
use Illuminate\Support\Carbon;
class Modeloperations extends Controller
{
public function liste()
{
    dd(Carbon::now()->addDay(),);
    $bilgiler=Books::all();
dd($bilgiler) ;

}
public function guncelle()
{
    Books::where('id',2)->update([
       "title"=>"this area is up to date.",
    ]);
}
public function sil()
{
    Books::where('id',2)->delete();
}
public function ekle()
{
    Books::create([
        "title"=>"model file added.",
        "number_of_pages"=>50,
        "release_date"=>Carbon::now(),
    ]);
}
}
