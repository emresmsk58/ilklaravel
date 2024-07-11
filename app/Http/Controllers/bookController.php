<?php

namespace App\Http\Controllers;


use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class bookController extends Controller
{
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

    public function list()
    {
        $books = Book::where('id', '!=', 0)
            ->where('number_of_pages', '>', 0)
            ->get();
        return view('books.form', ['books' => $books]);
    }

    public function delete($bookId)
    {
        Book::query()->where('id', $bookId)->delete();
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
        $book = Book::whereId($id)->first();
        return view('books.book-update', compact('book'));
        return redirect()->route('book.list');


    }

}
