<?php

namespace App\Http\Controllers\Book;

use App\Models\Book;
use App\Models\Metric;
use Illuminate\Http\Request;
use App\Models\MetricsOption;
use App\Models\BookFrontCover;
use App\Models\BookMetricsSummary;
use App\Http\Controllers\Controller;

class MatricsSummaryBookController extends Controller
{

    public function index($bookId = '')
    {
        $book = Book::where('id', $bookId)->first();

        $metrics = Metric::with('options')->get();

        $metricsCount = count(MetricsOption::get());

        $getBookOptions = BookMetricsSummary::where('book_id', $bookId)->get('metric_option_id');

        $bookOptionsIds = [];

        foreach ($getBookOptions as $getBookOption) {
            $bookOptionsIds[] = $getBookOption->metric_option_id;
        }

        $bookOptions = MetricsOption::whereIn('id', $bookOptionsIds)->get();

        $parentId = Metric::where('name', 'Your custom summary cards')->first('id');

        $customCardCount = count(MetricsOption::where('metric_id', $parentId->id)->get());

        return view('pages.book.matrics_summary', compact('book', 'bookId', 'metrics', 'metricsCount', 'bookOptionsIds', 'bookOptions', 'customCardCount'));
    }

    public function store(Request $request)
    {
        $delete = BookMetricsSummary::where('book_id', $request->bookId)->first();

        if (!empty($delete)) {
            BookMetricsSummary::where('book_id', $request->bookId)->delete();
        }

        $options = array_filter($request->options);

        foreach ($options as $option) {
            BookMetricsSummary::create([
                'book_id' => $request->bookId ?? '',
                'metric_option_id' => $option ?? '',
                'created_by' => auth()->user()->id ?? ''
            ]);
        }

        toastr()->success('Created Successfully');

        return redirect()->route('book.matrics_summary', $request->bookId);
    }

    public function storeCustomCard(Request $request)
    {
        $parentId = Metric::where('name', 'Your custom summary cards')->first('id');

        MetricsOption::create([
            'metric_id' => $parentId->id ?? '',
            'name' => $request->title ?? '',
            'description' => $request->description ?? '',
            'value' => $request->value ?? ''
        ]);

        toastr()->success('Created Successfully');

        return redirect()->route('book.matrics_summary', $request->bookId);
    }

    public function updateVisibility(Request $request)
    {
        
        $book = Book::find($request->bookId);
        
        $book->update([
            'show_matrics_summary' => $request->status ?? ''
        ]);

        toastr()->success('Updated Successfully');

        return redirect()->route('book.matrics_summary', $request->bookId);
    }
}
