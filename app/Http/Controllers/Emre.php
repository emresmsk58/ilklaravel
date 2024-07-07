<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Emre extends Controller
{
public function guncelle(): void
{
    DB::table("books")->where("id","1")->update([
        "title"=>"This text field has been updated."]);
}
public function sil()
{
    DB::table("books")->where("id",1)->delete();
}
}
