<?php

namespace App\Http\Controllers\Book;

use File;
use App\Models\BookSections;
use App\Models\SectionSlide;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\CoverageLayout;
use App\Models\CoverageLink;
use Illuminate\Database\Eloquent\Builder;

class CoverageController extends Controller
{
    public function index($bookId = '', $sectionId = '')
    {
        $sectionSlides = SectionSlide::where('section_id', $sectionId)->get();

        $allSections = BookSections::where('name', '!=', 'Front Matter')->get();

        $sectionData = BookSections::find($sectionId);

        $book = Book::find($bookId);

        $sectionLinks = CoverageLink::where('section_id', $sectionId)->where('book_id', $bookId)->get();

        $allLayout = CoverageLayout::get();

        return view('pages.book.coverage', compact('bookId', 'sectionId', 'sectionSlides', 'sectionData', 'allSections', 'sectionLinks', 'book', 'allLayout'));
    }

    public function sortBy(Request $request)
    {
        $bookId = $request->bookId;
        $sectionId = $request->sectionId;

        $sectionSlides = SectionSlide::query()
            ->when(($request->filter == 'title_a_z'), function (Builder $query) {
                $query->orderBy('name');
            })
            ->when(($request->filter == 'title_z_a'), function (Builder $query) {
                $query->orderBy('name', 'DESC');
            })
            ->when(($request->filter == 'outlet_a_z'), function (Builder $query) {
                $query->orderBy('file_name');
            })
            ->when(($request->filter == 'outlet_z_a'), function (Builder $query) {
                $query->orderBy('file_name', 'DESC');
            })
            ->where('section_id', $sectionId)
            ->get();

        $allSections = BookSections::where('name', '!=', 'Front Matter')->get();

        $sectionData = BookSections::find($sectionId);

        $book = Book::find($bookId);

        // $sectionLinks = CoverageLink::where('section_id', $sectionId)->where('book_id', $bookId)->get();

        $sectionLinks = CoverageLink::query()
            ->when(($request->filter == 'title_a_z'), function (Builder $query) {
                $query->orderBy('name');
            })
            ->when(($request->filter == 'title_z_a'), function (Builder $query) {
                $query->orderBy('name', 'DESC');
            })
            ->when(($request->filter == 'outlet_a_z'), function (Builder $query) {
                $query->orderBy('name');
            })
            ->when(($request->filter == 'outlet_z_a'), function (Builder $query) {
                $query->orderBy('name', 'DESC');
            })
            ->where('section_id', $sectionId)
            ->where('book_id', $bookId)
            ->get();

        $allLayout = CoverageLayout::get();

        return view('pages.book.coverage', compact('bookId', 'sectionId', 'sectionSlides', 'sectionData', 'allSections', 'sectionLinks', 'book', 'allLayout'));
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
            $updateimage =  $link->image ?? '';
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

    public function storeLayout(Request $request)
    {
        $section = BookSections::find($request->updateRow);

        $section->update([
            'layout_id' => $request->layoutId
        ]);
        toastr()->success('Create Successfully');
        return redirect()->back();
    }

    public function updateStatus(Request $request)
    {
        $updateRow = BookSections::find($request->updateRow);

        $updateRow->update([
            'visibility' => $request->status ?? '',
        ]);
        toastr()->success('Updated Successfully');

        return redirect()->route('book.coverage', [$request->bookId, $request->updateRow]);
    }
}
