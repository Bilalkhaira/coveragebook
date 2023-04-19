<?php

namespace App\Http\Controllers\Book;

use Illuminate\Http\Request;
use App\Models\BookFrontCover;
use App\Http\Controllers\Controller;
use File;

class BookController extends Controller
{
    public function index($bookId = '')
    {
        $book = BookFrontCover::where('book_id', $bookId)->first();
        return view('pages.book.index', compact('book', 'bookId'));
    }

    public function storeBookLogo(Request $request)
    {
        $imgpath = public_path('img/fontCover/');

        if (!empty($request->bookId)) {

            $book = BookFrontCover::find($request->recordRowId);

            if (empty($request->file_photo)) {
                $updateimage = $book->cover_logo ?? '';
            } else {
                $imagePath =  $imgpath . $book->cover_logo ?? '';

                if (File::exists($imagePath)) {
                    File::delete($imagePath);
                }

                $destinationPath = $imgpath;
                $file = $request->file_photo;
                $fileName = time() . '.' . $file->clientExtension();
                $file->move($destinationPath, $fileName);
                $updateimage = $fileName;
            }

            $book->update([
                'cover_logo' => $updateimage ?? '',
                'cover_title' => $request->title ?? '',
                'cover_subtitle' => $request->sub_title ?? '',
            ]);
            toastr()->success('Updated Successfully');
        } 

        return redirect()->back();
    }
}
