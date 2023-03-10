<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PreviewBookController extends Controller
{
    public function index()
    {
        return view('pages.book.preview_book');
    }
}
