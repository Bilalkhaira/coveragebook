<?php

namespace App\Http\Controllers\Book;

use App\Models\BookFrontCover;
use App\Http\Controllers\Controller;
use App\Models\Matric;

class MatricsSummaryBookController extends Controller
{
    
    public function index($bookId = '')
    {
        $book = BookFrontCover::where('book_id', $bookId)->first();

        $matrics = Matric::with('options')->get();
        // dd($matrics);
        
        return view('pages.book.matrics_summary', compact('book', 'bookId', 'matrics'));
    }
}
