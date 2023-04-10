<?php

namespace App\Http\Controllers\Book;

use Illuminate\Http\Request;
use App\Models\BookFrontCover;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    public function index($bookId = '') 
    {
        $book = BookFrontCover::where('book_id', $bookId)->first();
        return view('pages.book.index', compact('book', 'bookId'));
    }
}
