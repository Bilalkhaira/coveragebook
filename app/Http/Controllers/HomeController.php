<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CollectionsAndBooks;
use Illuminate\Database\Eloquent\Builder;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $collections = CollectionsAndBooks::whereNull('parent_id')->get();

        $allBooks = CollectionsAndBooks::whereNotNull('parent_id')->get();

        return view('home', ['collections' => $collections, 'allBooks' => $allBooks]);
    }

    public function collectionBooks($id)
    {
        $collections = CollectionsAndBooks::whereNull('parent_id')->get();

        $allBooks = CollectionsAndBooks::where('parent_id', $id)->where('archived', 'false')->get();

        return view('home', ['collections' => $collections, 'allBooks' => $allBooks, 'parent_id' => $id]);
    }

    public function filterBooks(Request $request)
    {
        // dd(request('parent_id'));
        $collections = CollectionsAndBooks::whereNull('parent_id')->get();

        if (!empty($request->is_allBook) OR $request->identify == 'allBook') {
            // dd('allbook');
            $allBooks = CollectionsAndBooks::query()
                ->when($request->name, function (Builder $query, string $search) {
                    $query->where('name', 'LIKE', '%'.$search.'%')->whereNotNull('parent_id');
                })
                ->when(($request->filter == 'assec'), function (Builder $query) {
                    $query->whereNotNull('parent_id');
                })
                ->when(($request->filter == 'desec'), function (Builder $query) {
                    $query->whereNotNull('parent_id')->orderBy('name', 'DESC');
                })
                ->when(($request->filter == 'recentlyCreated'), function (Builder $query) {
                    $query->whereNotNull('parent_id')->orderBy('created_at', 'DESC');
                })
                ->when(($request->filter == 'recentlyUpdated'), function (Builder $query) {
                    $query->whereNotNull('parent_id')->orderBy('updated_at', 'DESC');
                })
                ->get();

                $identify = 'allBook';
                $parent_id = '';
        } else {
            // dd('not');
            // dd($request->all());
            $allBooks = CollectionsAndBooks::query()
                ->when($request->name, function (Builder $query, string $search) {
                    $query->where('name', 'LIKE', '%'.$search.'%')->where('parent_id', request('parent_id'));
                })
                ->when(($request->filter == 'assec'), function (Builder $query) {
                    $query->where('parent_id', request('parent_id'));
                })
                ->when(($request->filter == 'desec'), function (Builder $query) {
                    $query->where('parent_id', request('parent_id'))->orderBy('name', 'DESC');
                })
                ->when(($request->filter == 'recentlyCreated'), function (Builder $query) {
                    $query->where('parent_id', request('parent_id'))->orderBy('created_at', 'DESC');
                })
                ->when(($request->filter == 'recentlyUpdated'), function (Builder $query) {
                    $query->where('parent_id', request('parent_id'))->orderBy('updated_at', 'DESC');
                })
                ->get();

                $identify = 'notAllBook';
                $parent_id = $request->parent_id;
        }
        if(!empty($request->filter)) {
            $filter_name = $request->filter;
        } else {
            $filter_name = '';
        }

        // dd($request->all());

        return view('home', ['collections' => $collections, 'allBooks' => $allBooks, 'identify' => $identify, 'parent_id' => $parent_id, 'filter_name' => $filter_name]);
    }

    public function storeCollection(Request $request)
    {
        CollectionsAndBooks::create([
            'name' => $request->name
        ]);

        toastr()->success('Created Successfully');
        return back();
    }

    public function storeBook(Request $request)
    {
        CollectionsAndBooks::create([
            'name' => $request->name,
            'parent_id' => $request->parentId,
        ]);

        toastr()->success('Created Successfully');
        return back();
    }
}
