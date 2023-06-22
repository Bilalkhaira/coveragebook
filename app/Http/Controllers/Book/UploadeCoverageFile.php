<?php

namespace App\Http\Controllers\Book;

use App\Models\BookSections;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UploadeCoverageFile extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    
    public function index($bookId = '') 
    {
        $allSections = BookSections::where('name', '!=', 'Front Matter')->where('book_id', $bookId)->get();
        
        return view('pages.book.upload_coverage_file', compact('bookId', 'allSections'));
    }
}
