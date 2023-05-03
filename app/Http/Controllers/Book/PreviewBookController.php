<?php

namespace App\Http\Controllers\Book;

use App\Models\Book;
use App\Models\Layout;
use App\Models\BookSections;
use App\Models\CoverageLink;
use Illuminate\Http\Request;
use App\Models\MetricsOption;
use App\Models\BookFrontCover;
use App\Models\BookMetricsSummary;
use App\Http\Controllers\Controller;

class PreviewBookController extends Controller
{
    public function index($bookId = '')
    {

        $book = BookFrontCover::where('book_id', $bookId)->where('visibility', 'show')->first();

        $findBook = Book::find($bookId);

        if ($findBook->show_matrics_summary == 1) {

            $getBookOptions = BookMetricsSummary::where('book_id', $bookId)->get('metric_option_id');

            $bookOptionsIds = [];

            foreach ($getBookOptions as $getBookOption) {
                $bookOptionsIds[] = $getBookOption->metric_option_id;
            }

            $metrics = MetricsOption::whereIn('id', $bookOptionsIds)->get();
        } else {
            $metrics = '';
        }

        $bookSections = BookSections::whereHas('slides', function ($query) {
            $query->whereNotNull('file_name');
        })
            ->orWhereHas('links', function ($query) {
                $query->whereNotNull('links');
            })
            ->with(['slides', 'links'])
            ->where('book_id', $bookId)
            ->get();

        dd($bookSections);

        return view('pages.book.preview_book', compact('book', 'bookId', 'metrics', 'findBook', 'bookSections'));
    }
}
