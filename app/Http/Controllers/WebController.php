<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home() {
        $books = Book::all();
        return view('home', compact('books'));
    }

    public function services() {
        return view('services');
    }

    public function authors() {
        return view('authors');
    }

    public function articles() {
        return view('articles');
    }

    public function about() {
        return view('about');
    }
}
