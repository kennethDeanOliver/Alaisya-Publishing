<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Article;
use App\Models\Author;
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
        $authors = Author::all();
        return view('authors', compact('authors'));
    }

    public function articles() {
        $articles = Article::all();
        return view('articles', compact('articles'));
    }

    public function about() {
        return view('about');
    }
}
