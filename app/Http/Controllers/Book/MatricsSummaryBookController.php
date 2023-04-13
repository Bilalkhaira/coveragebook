<?php

namespace App\Http\Controllers\Book;

use App\Models\Metric;
use App\Models\BookFrontCover;
use App\Http\Controllers\Controller;
use App\Models\MetricsOption;

class MatricsSummaryBookController extends Controller
{
    
    public function index($bookId = '')
    {
        $book = BookFrontCover::where('book_id', $bookId)->first();

        $metrics = Metric::with('options')->get();
        
        $metricsCount = count(MetricsOption::get());

        return view('pages.book.matrics_summary', compact('book', 'bookId', 'metrics', 'metricsCount'));
    }
}
