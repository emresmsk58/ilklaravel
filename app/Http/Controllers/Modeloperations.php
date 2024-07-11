<?php

namespace App\Http\Controllers;


use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class Modeloperations extends Controller
{

    public function liste()
    {
        dd(Carbon::now()->addDay(),);
        $bilgiler = Book::all();
        dd($bilgiler);

    }

    public function guncelle()
    {
        Book::where('id', 2)->update([
            "title" => "this area is up to date.",
        ]);
    }

    public function sil()
    {
        Book::where('id', 4)->delete();
    }

    public function ekle()
    {
        Book::create([
            "title" => "model file added.",
            "number_of_pages" => 50,
            "release_date" => Carbon::now(),
        ]);
    }

    public function gorunum()
    {
        return view('books.form');
    }

    public function add(Request $request)
    {
        $request->validate([

            'title' => 'required',
            'number_of_pages' => 'required|integer',
            'release_date' => 'required|date',

        ]);

        Book::query()->create([
            'title' => $request->input('title'),
            'number_of_pages' => $request->input('number_of_pages'),
            'release_date' => $request->input('release_date'),
        ]);


        return redirect()->route('books.form', [$request])->with(['message' => 'books added successfully']);

    }

    public function listeleme()
    {
        $books = Book::where('id', '!=', 0)
            ->where('number_of_pages', '>', 0)
            ->get();
        return view('books.form', ['books' => $books]);
    }

    public function delete($kitapId)
    {
        Book::query()->where('id', $kitapId)->delete();
        return redirect()->route('books.form')->with(['message' => 'books added deleted']);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'number_of_pages' => 'required|integer',
            'release_date' => 'required|date',
        ]);

        Book::where('id', $id)->update([
            'title' => $request->input('title'),
            'number_of_pages' => $request->input('number_of_pages'),
            'release_date' => $request->input('release_date'),
        ]);

        return redirect()->route('books.form')->with(['message' => 'Book updated successfully']);
    }
    public function bookUpdate($id)
    {
        $kitaplar=Book::whereId($id)->first();
        if($kitaplar){
            return view('books.book-update',compact('kitaplar'));
        }
        else{
            return redirect()->route('book.listeleme');
        }

    }

}
