<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\CoverageLink;
use Illuminate\Http\Request;

class BookLighlightController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    public function index($bookId = '')
    {
        $book = Book::find($bookId);

        $bookLinkSec = CoverageLink::where('book_id', $bookId)->where('hightlight_status', '!=', 'inactive')->get();

        return view('pages.book.highlights', compact('bookId', 'book', 'bookLinkSec'));
    }

    public function store($id = '')
    {
        $record = CoverageLink::find($id);
        if($record->hightlight_status == 'inactive')
        {
            $record->update([
                'hightlight_status' => 'active'
            ]);
        }
        else 
        {
            $record->update([
                'hightlight_status' => 'inactive'
            ]);
        }

        toastr()->success('Update Successfully');

        return redirect()->back();
    }
}
