<?php

namespace App\Http\Controllers\Book;

use File;
use App\Models\Book;
use Illuminate\Http\Request;
use App\Models\BookFrontCover;
use App\Models\BookMetricsSummary;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    public function index($bookId = '')
    {
        $frontCover = BookFrontCover::where('book_id', $bookId)->first();

        $book = Book::find($bookId);

        $metrics = BookMetricsSummary::with('metricOptions')->where('book_id', $bookId)->limit(2)->get();

        $metricsCount = count(BookMetricsSummary::where('book_id', $bookId)->get());

        return view('pages.book.index', compact('book', 'bookId', 'frontCover', 'metricsCount', 'metrics'));
    }

    public function storeBookLogo(Request $request)
    {
        $imgpath = public_path('img/');

        if (!empty($request->file_photo)) {

            $book = Book::find($request->bookId);

            if (!empty($request->banner_logo)) {
                $imagePath =  $imgpath . $book->banner_logo ?? '';

                if (File::exists($imagePath)) {
                    File::delete($imagePath);
                }
            }

            $destinationPath = $imgpath;
            $file = $request->file_photo;
            $fileName = time() . '.' . $file->clientExtension();
            $file->move($destinationPath, $fileName);
            $updateimage = $fileName;

            $book->update([
                'banner_logo' => $updateimage ?? ''
            ]);
            toastr()->success('Upload Successfully');
        } else {
            toastr()->error('Please upload image then submit');
        }

        return redirect()->back();
    }

    public function deleteBookHeaderLogo($id)
    {
        $book = Book::find($id);

        $imgpath = public_path('img/');

        $imagePath =  $imgpath . $book->banner_logo ?? '';

        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }
        $book->update([
            'banner_logo' => '',
        ]);

        toastr()->success('Image Delete Successfully');
        return redirect()->route('book.index', $book->id);
    }

    public function setHeaderIconColor(Request $request)
    {

        $book = Book::find($request->bookId);

        $book->update([
            'accent_color' => $request->bg_color ?? '',
        ]);
        toastr()->success('Updated Successfully');

        return redirect()->back();
    }
}
