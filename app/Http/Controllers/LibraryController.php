<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class LibraryController extends Controller
{
    public function index()
    {
        $authors = Author::with('books.genres', 'books.reviews')->get();
        return view('library.index', compact('authors'));
    }
}
