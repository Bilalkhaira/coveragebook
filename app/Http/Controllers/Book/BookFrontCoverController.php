<?php

namespace App\Http\Controllers\Book;

use File;
use App\Models\Book;
use App\Models\Layout;
use Illuminate\Http\Request;
use App\Models\BookFrontCover;
use App\Http\Controllers\Controller;

class BookFrontCoverController extends Controller
{
    public function index($bookId = '')
    {
        $book = BookFrontCover::where('book_id', $bookId)->first();
        $layout = Layout::get();
        $bookData = Book::find($bookId);
        return view('pages.book.front_cover',  compact('book', 'bookId', 'layout', 'bookData'));
    }

    public function StoreLogoText(Request $request)
    {
        $imgpath = public_path('img/fontCover/');

        if (!empty($request->recordRowId)) {

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
        } else {
            if (!empty($request->file_photo)) {
                $imgpath = public_path('img/fontCover/');
                $destinationPath = $imgpath;
                $file = $request->file_photo;
                $fileName = time() . '.' . $file->clientExtension();
                $file->move($destinationPath, $fileName);
            }
            BookFrontCover::create([
                'cover_logo' => $updateimage ?? '',
                'cover_title' => $request->title ?? '',
                'book_id' => $request->bookId ?? '',
                'cover_subtitle' => $request->sub_title ?? '',
            ]);
            toastr()->success('Created Successfully');
        }

        return redirect()->back();
    }

    public function storeCoverImage(Request $request)
    {
        $imgpath = public_path('img/fontCover/');
        if (!empty($request->recordRowId)) {
            $book = BookFrontCover::find($request->recordRowId);

            if (!empty($request->file_photo)) {
                $imagePath =  $imgpath . $book->cover_image ?? '';

                if (File::exists($imagePath)) {
                    File::delete($imagePath);
                }

                $destinationPath = $imgpath;
                $file = $request->file_photo;
                $fileName = time() . '.' . $file->clientExtension();
                $file->move($destinationPath, $fileName);
                $updateimage = $fileName;

                $book->update([
                    'cover_image' => $updateimage ?? '',
                    'cover_image_title' => $request->title ?? '',
                ]);
            }
            else
            {  
                if(isset($request->title) && $request->title =="None")
                {
                    $imagePath =  $imgpath . $book->cover_image ?? '';
                    if (File::exists($imagePath)) {
                        File::delete($imagePath);
                    }
                    $book->update([
                        'cover_image' =>'',
                        'cover_image_title' => $request->title ?? '',
                    ]);
                }
                else{
                    $book->update([
                        'cover_image_title' => $request->title ?? '',
                    ]);
                }

            }
            toastr()->success('Updated Successfully');
        } else {
            if (!empty($request->file_photo)) {
                $destinationPath = $imgpath;
                $file = $request->file_photo;
                $fileName = time() . '.' . $file->clientExtension();
                $file->move($destinationPath, $fileName);
            }
            BookFrontCover::create([
                'cover_image' => $fileName ?? '',
                'cover_image_title' => $request->title ?? '',
                'book_id' => $request->bookId ?? '',
            ]);
            toastr()->success('Created Successfully');
        }

        return redirect()->back();
    }


    public function backgroundColor(Request $request)
    {
        if (!empty($request->recordRowId)) {

            $book = BookFrontCover::find($request->recordRowId);

            $book->update([
                'cover_bg_color' => $request->bg_color ?? '',
            ]);
            toastr()->success('Updated Successfully');
        } else {

            BookFrontCover::create([
                'cover_bg_color' => $request->bg_color ?? '',
                'book_id' => $request->bookId ?? '',
            ]);
            toastr()->success('Created Successfully');
        }

        return redirect()->back();
    }

    public function updateStatus(Request $request)
    {
        if (!empty($request->recordRowId)) {

            $book = BookFrontCover::find($request->recordRowId);

            $book->update([
                'visibility' => $request->status ?? '',
            ]);
            toastr()->success('Updated Successfully');
        } else {

            BookFrontCover::create([
                'visibility' => $request->status ?? '',
                'book_id' => $request->bookId ?? '',
            ]);
            toastr()->success('Created Successfully');
        }

        return redirect()->back();
    }

    public function storeLayout(Request $request)
    {
        if (!empty($request->recordRowId)) {

            $book = BookFrontCover::find($request->recordRowId);
            if (!empty($request->layoutId)) {
                $book->update([
                    'layout_id' => $request->layoutId ?? '',
                ]);
            }
            toastr()->success('Updated Successfully');
        } else {
            if (!empty($request->layoutId)) {
                BookFrontCover::create([
                    'layout_id' => $request->layoutId ?? '',
                    'book_id' => $request->bookId ?? '',
                ]);
                toastr()->success('Created Successfully');
            } else {
                toastr()->error('This layout already select change the layout then submit');
            }

        }

        return redirect()->back();
    }

    public function deleteLogoImage($id)
    {
        $book = BookFrontCover::find($id);

        $imgpath = public_path('img/fontCover/');

        $imagePath =  $imgpath . $book->cover_logo ?? '';

        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }
        $book->update([
            'cover_logo' => '',
        ]);

        toastr()->success('Image Delete Successfully');
        return redirect()->back();
    }
}
