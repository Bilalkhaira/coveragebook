<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use App\Models\SectionSlide;
use Illuminate\Http\Request;

class CoverageController extends Controller
{
    public function index($bookId = '', $sectionId = '')
    {
        $sectionSlides = SectionSlide::where('section_id', $sectionId)->get();
        // dd($sectionSlides);

        return view('pages.book.coverage', compact('bookId', 'sectionId', 'sectionSlides'));
    }
}
