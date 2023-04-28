<?php

namespace App\Http\Controllers\Book;

use File;
use App\Models\Book;
use Illuminate\Http\Request;
use App\Models\BookFrontCover;
use App\Models\BookMetricsSummary;
use App\Http\Controllers\Controller;
use App\Models\BookFile;
use App\Models\BookSections;
use App\Models\SectionSlide;

class BookController extends Controller
{
    public function index($bookId = '')
    {
        $frontCover = BookFrontCover::where('book_id', $bookId)->first();

        $book = Book::find($bookId);

        $metrics = BookMetricsSummary::with('metricOptions')->where('book_id', $bookId)->limit(2)->get();

        $metricsCount = count(BookMetricsSummary::where('book_id', $bookId)->get());

        $sections = BookSections::get();

        $bookSections = BookSections::with('slides')->where('book_id', $bookId)->get();

        $slides = BookSections::with('slides')->where('name', 'Front Matter')->first();
// dd($slides);
        return view('pages.book.index', compact('book', 'bookId', 'frontCover', 'metricsCount', 'metrics', 'slides', 'sections', 'bookSections'));
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

    public function addNewSlideFiles(Request $request)
    {
        $imgpath = public_path('img/files/');

        $image = $request->file('file');
        $imageName = $image->getClientOriginalName();
        $image->move($imgpath, $imageName);

        SectionSlide::create([
            'section_id' => $request->parrentId ?? '',
            'file_name' => $imageName ?? '',
        ]);

        return response()->json(['success' => 'true']);
    }

    public function fileDestroy(Request $request)
    {
        $imgpath = public_path('img/files/');

        $filename =  $request->get('filename');
        SectionSlide::where('file_name', $filename)->delete();
        $path = $imgpath . $filename;

        if (file_exists($path)) {
            unlink($path);
        }
        if (!empty($request->get('bookId'))) {
            toastr()->success('File Delete Successfully');
            // return redirect()->route('book.index', $request->bookId);
            return redirect()->back();
        }
        return response()->json(['success' => 'true']);
    }

    public function editSlide($id = '', $bookId = '')
    {
        $book = Book::find($bookId);

        $slide = SectionSlide::find($id);

        return view('pages.book.edit_new_slide', compact('book', 'bookId', 'slide'));

    }

    public function updateSlide(Request $request)
    {
        $slide = SectionSlide::find($request->slideId);

        $slide->update([
            'name' => $request->name ?? '',
        ]);

        return redirect()->back();
    }
}
