<?php

namespace App\Http\Controllers;


use Illuminate\Database\Eloquent\Model;
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
    Books::where('id',3)->delete();
}
public function ekle()
{
    Books::create([
        "title"=>"model file added.",
        "number_of_pages"=>50,
        "release_date"=>Carbon::now(),
    ]);
}
    public function gorunum()
    {
        return view('books.form');
    }
    function add(Request $request)
    {

$request->validate([
   'title'=>'required',
    'number_of_pages'=>'required',
    'release_date'=>'required',
]);
$query =Books::create([
    'title'=>$request->input('title'),
    'number_of_pages'=>$request->input('number_of_pages'),
    'release_date'=>$request->input('release_date')
]);


}
}
