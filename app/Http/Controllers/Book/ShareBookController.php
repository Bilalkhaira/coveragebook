<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class ShareBookController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    
    public function index($bookId = '')
    {
        $book = Book::find($bookId);
        
       return  view('pages.book.share_book', compact('bookId', 'book'));
    }
}
