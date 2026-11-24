<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function authors()
    {
        $authors = Author::all();
        return view('authors', compact('authors'));
    }
}