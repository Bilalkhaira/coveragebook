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
        $bookId = BookSections::find($id);
        SectionSlide::where('section_id', $id)->delete();
        BookSections::find($id)->delete();


        toastr()->success('Delete Successfully');

        return redirect()->route('book.index', $bookId->book_id);
    }

    public function update(Request $request)
    {
        $section = BookSections::find($request->rowId);
        $section->update([
            'name' => $request->name ?? '',
            'description' => $request->desc ?? '',
        ]);

        toastr()->success('Update Successfully');
        return redirect()->back();
    }
}
