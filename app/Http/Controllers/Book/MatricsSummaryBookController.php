<?php

namespace App\Http\Controllers\Book;

use App\Models\Matric;
use Illuminate\Http\Request;
use App\Models\BookFrontCover;
use App\Helpers\HelperFunctions;
use App\Http\Controllers\Controller;

class MatricsSummaryBookController extends Controller
{
    
    public function index($bookId = '')
    {
        // HelperFunctions::getUserImage();
        $book = BookFrontCover::where('book_id', $bookId)->first();
        
        return view('pages.book.matrics_summary', compact('book', 'bookId'));
    }
}
