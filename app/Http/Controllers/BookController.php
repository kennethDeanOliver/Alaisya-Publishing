<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function bookCatalog() {
        $books = Book::all();
        return view('book.catalog',
            ['books' => $books]
        );
    }

    public function bookPublishing() {
        return view('book.publishing');
    }
}
