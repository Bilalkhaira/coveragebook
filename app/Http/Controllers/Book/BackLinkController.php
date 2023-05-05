<?php

namespace App\Http\Controllers\Book;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BookBacklink;

class BackLinkController extends Controller
{
    public function index($bookId = '')
    {
        $book = Book::find($bookId);

        $bookLinks = BookBacklink::where('book_id', $bookId)->get();
        return view('pages.book.back_links', compact('bookId', 'book', 'bookLinks'));
    }

    public function store(Request $request)
    {
        BookBacklink::create([
            'book_id' => $request->bookId,
            'backlink' => $request->link
        ]);

        toastr()->success('Created Successfully');

        return redirect()->back();
    }

    public function delete($id = '')
    {
        $link = BookBacklink::find($id);

        $link->delete();

        toastr()->success('Created Successfully');

        return redirect()->route('book.backLink.index', $link->book_id);
    }
}
