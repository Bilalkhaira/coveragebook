<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.home');
    }

    public function homeSetting()
    {
        return view('admin.pages.homeSetting');
    }

    public function updateSatisfiedSection(Request $request)
    {
        dd($request->all());
    }
}
