<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home() {
        $books = Book::all();
        return view('home',
            ['books' => $books]
        );
    }

    public function services() {
        return view('services');
    }

    public function about() {
        return view('about');
    }
}
