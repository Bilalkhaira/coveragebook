<?php

namespace App\Http\Controllers\Book;

use App\Models\Book;
use App\Models\Metric;
use App\Models\MetricGroup;
use Illuminate\Http\Request;
use App\Models\MetricsOption;
use App\Models\BookMetricsSummary;
use App\Http\Controllers\Controller;

class MatricsSummaryBookController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index($bookId = '')
    {
        $metric_groups = MetricGroup::get();

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

        $bookGroupIds = json_decode((BookMetricsSummary::where('book_id', $bookId)->first('group_id'))->group_id ?? '');

        return view('pages.book.matrics_summary', compact('book', 'bookGroupIds', 'bookId', 'metrics', 'metricsCount', 'bookOptionsIds', 'bookOptions', 'customCardCount', 'metric_groups'));
    }

    public function store(Request $request)
    {
        $delete = BookMetricsSummary::where('book_id', $request->bookId)->first();

        if (!empty($delete)) {
            BookMetricsSummary::where('book_id', $request->bookId)->delete();
        }
        $options = array_filter($request->options);

        $getgroupIds = array_filter($request->groupIds ?? []);

        if ($getgroupIds) {
            $groupIds = array();
            foreach ($getgroupIds as $getgroupId) {
                $groupIds[] = $getgroupId;
            }

            foreach ($options as $option) {
                BookMetricsSummary::create([
                    'book_id' => $request->bookId ?? '',
                    'metric_option_id' => $option ?? '',
                    'group_id' => json_encode($groupIds ?? '')
                ]);
            }
        }
        else 
        {
            foreach ($options as $option) {
                BookMetricsSummary::create([
                    'book_id' => $request->bookId ?? '',
                    'metric_option_id' => $option ?? ''
                ]);
            }
        }

        toastr()->success('Created Successfully');

        return redirect()->route('book.matrics_summary', $request->bookId);
    }

    public function storeGroup(Request $request)
    {
        $options = array_filter($request->options);

        $arr = [];
        foreach ($options as $option) {
            $arr[] = $option;
        }

        MetricGroup::create([
            'name' => $request->group_name ?? '',
            'metric_id' => json_encode($arr ?? ''),
            'created_by' => auth()->user()->id ?? ''
        ]);

        toastr()->success('Created Successfully');

        return redirect()->route('book.matrics_summary', $request->bookId);
    }


    public function deleteGroup($id = '')
    {
        MetricGroup::find($id)->delete();
        toastr()->success('Group Deleted Successfully');
        return redirect()->back();
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

        return redirect()->back();
    }
}
