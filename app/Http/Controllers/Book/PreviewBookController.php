<?php

namespace App\Http\Controllers\Book;

use App\Models\Layout;
use Illuminate\Http\Request;
use App\Models\BookFrontCover;
use App\Http\Controllers\Controller;

class PreviewBookController extends Controller
{
    public function index($bookId='')
    {
        
        $book = BookFrontCover::where('book_id', $bookId)->where('visibility', 'show')->first();
        
        return view('pages.book.preview_book', compact('book', 'bookId'));
    }
}
