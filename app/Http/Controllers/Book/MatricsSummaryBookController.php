<?php

namespace App\Http\Controllers\Book;

use App\Models\Metric;
use App\Models\BookFrontCover;
use App\Http\Controllers\Controller;

class MatricsSummaryBookController extends Controller
{
    
    public function index($bookId = '')
    {
        $book = BookFrontCover::where('book_id', $bookId)->first();

        $matrics = Metric::with('options')->get();
        
        return view('pages.book.matrics_summary', compact('book', 'bookId', 'matrics'));
    }
}
