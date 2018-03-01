<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Reader;
 
class BookController extends Controller
{
    public function index()
    {
        return Book::all();
    }
 
    public function show(Book $book)
    {
        $comments = Book::find(1)->comments;
        $arr = [];
        $arr['book'] = $book;
        $arr['comments'] = $comments;
        // add reader who comments here
        return $arr;
    }

    public function search($keyword)
    {
        $book = Book::where('title', 'LIKE', '%'.$keyword.'%');
        return $book->get();
    }

    public function store(Request $request)
    {
        $book = Book::create($request->all());

        return response()->json($article, 201);
    }

    public function update(Request $request, Book $book)
    {
        $book->update($request->all());

        return response()->json($book, 200);
    }

    public function delete(Book $book)
    {
        $book->delete();

        return response()->json(null, 204);
    }
}
