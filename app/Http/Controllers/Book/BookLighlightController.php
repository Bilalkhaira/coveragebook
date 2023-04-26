<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookLighlightController extends Controller
{
    public function index($bookId = '')
    {
        return view('pages.book.highlights', compact('bookId'));
    }
}
