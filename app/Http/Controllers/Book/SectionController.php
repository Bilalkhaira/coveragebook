<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use App\Models\BookFile;
use App\Models\BookSections;
use App\Models\SectionSlide;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function store(Request $request)
    {
        BookSections::create([
            'name' => $request->name ?? '',
            'book_id' => $request->bookId ?? '',
        ]);

        toastr()->success('Create Successfully');
        return redirect()->back();
    }

    public function updateStatus(Request $request)
    {
        $book = BookSections::find($request->recordRowId);

        $book->update([
            'visibility' => $request->status ?? '',
        ]);
        toastr()->success('Updated Successfully');

        return redirect()->back();
    }

    public function delete($id = '')
    {
        SectionSlide::where('section_id', $id)->delete();
        BookSections::find($id)->delete();
        toastr()->success('Delete Successfully');

        return redirect()->back();
    }
}
