<?php

namespace App\Http\Controllers\Book;

use File;
use App\Models\BookSections;
use App\Models\SectionSlide;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CoverageLink;

class CoverageController extends Controller
{
    public function index($bookId = '', $sectionId = '')
    {
        $sectionSlides = SectionSlide::where('section_id', $sectionId)->get();

        $sections = BookSections::where('name', '!=', 'Front Matter')->get();

        $sectionLinks = CoverageLink::where('section_id', $sectionId)->where('book_id', $bookId)->get();

        return view('pages.book.coverage', compact('bookId', 'sectionId', 'sectionSlides', 'sections', 'sectionLinks'));
    }

    public function storeLinks(Request $request)
    {
        CoverageLink::create([
            'section_id' => $request->sectionId,
            'book_id' => $request->bookId,
            'links' => $request->link
        ]);

        toastr()->success('Save Links Successfully');

        return redirect()->route('book.coverage', [$request->bookId, $request->sectionId]);
    }

    public function editLink(Request $request)
    {

        $link = CoverageLink::find($request->id);

        toastr()->success('Update Successfully');

        return response()->json($link);
    }

    public function updataLink(Request $request)
    {
        $imgpath = public_path('img/files/');

        $link = CoverageLink::find($request->updatedId);

        if (empty($request->file_photo)) {
            $imagePath =  $imgpath . $link->image ?? '';

        } else {
            $imagePath =  $imgpath . $link->image ?? '';

            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }

            $destinationPath = $imgpath;
            $file = $request->file_photo;
            $fileName = time() . '.' . $file->clientExtension();
            $file->move($destinationPath, $fileName);
            $updateimage = $fileName;
        }

        $link->update([
            'name' => $request->name ?? '',
            'image' => $updateimage ?? '',
            'description' => $request->description ?? '',
        ]);
        toastr()->success('Updated Successfully');


        return redirect()->back();
    }

    public function deleteLink($id = '')
    {
        CoverageLink::find($id)->delete();

        toastr()->success('Delete Links Successfully');

        return redirect()->back();
    }
}
