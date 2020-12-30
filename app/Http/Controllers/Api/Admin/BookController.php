<?php

namespace App\Http\Controllers\Api\Admin;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    public function getAllBooks() {
        $books = Book::get()->toJson(JSON_PRETTY_PRINT);
        return response($books, 200);
    }

    public function getBook($id) {
        if (Book::where('id', $id)->exists()) {
          $book = Book::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
          return response($book, 200);
        } else {
          return response()->json([
            "message" => "Book not found"
          ], 404);
        }
    }

    public function createBook(Request $request) {
        $book = new Book;
        $book->name = $request->name;
        $book->author = $request->author;
        $book->save();

        return response()->json([
          "message" => "Book record created",
          "data" => $book
        ], 201);
    }

    public function updateBook(Request $request, $id) {
        $book = Book::find($id);
        $book->name = $request->input('name');
        $book->author = $request->input('author');
        if($book->save()){
            return response()->json([
                "message" => "records updated successfully",
                "data" => $book
            ], 200);
        }
    }

    public function deleteBook ($id) {
        if(Book::where('id', $id)->exists()) {
          $book = Book::findOrFail($id);
          $book->delete();

          return response()->json([
            "message" => "records deleted",
            "data" => $book
          ], 202);
        } else {
          return response()->json([
            "message" => "Book not found"
          ], 404);
        }
    }
}
