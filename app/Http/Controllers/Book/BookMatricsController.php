<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookMatricsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    
    public function index()
    {
        return view('pages.book.matrics');
    }
}
