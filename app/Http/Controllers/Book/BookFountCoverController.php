<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class BookFountCoverController extends Controller
{
    public function index()
    {
        return view('pages.book.fount_cover');
    }
}
