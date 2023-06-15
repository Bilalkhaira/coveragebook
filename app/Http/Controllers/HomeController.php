<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookSections;
use App\Models\Collection;
use Illuminate\Http\Request;
use App\Models\CollectionsAndBooks;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

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
        $collections = Collection::get();

        $allBooks = Book::with('frontCover')->where('visibility', 'show')->orderBy('name')->get();
        
        return view('home', ['collections' => $collections, 'allBooks' => $allBooks]);
    }

    public function collectionBooks($id)
    {
        $collections = Collection::get();

        $allBooks = Book::where('collection_id', $id)->where('visibility', 'show')->orderBy('name')->get();

        return view('home', ['collections' => $collections, 'allBooks' => $allBooks, 'parent_id' => $id]);
    }

    public function filterBooks(Request $request)
    {
        $collections = Collection::get();

        if (!empty($request->is_allBook) OR $request->identify == 'allBook') {
            $allBooks = Book::query()
                ->when($request->name, function (Builder $query, string $search) {
                    $query->where('name', 'LIKE', '%'.$search.'%');
                })
                ->when(($request->filter == 'desec'), function (Builder $query) {
                    $query->orderBy('name', 'DESC');
                })
                ->when(($request->filter == 'recentlyCreated'), function (Builder $query) {
                    $query->orderBy('created_at', 'DESC');
                })
                ->when(($request->filter == 'recentlyUpdated'), function (Builder $query) {
                    $query->orderBy('updated_at', 'DESC');
                })
                ->where('visibility', 'show')
                ->get();

                $identify = 'allBook';
                $parent_id = '';
        } else {
            $allBooks = Book::query()
                ->when($request->name, function (Builder $query, string $search) {
                    $query->where('name', 'LIKE', '%'.$search.'%');
                })
                ->when(($request->filter == 'desec'), function (Builder $query) {
                    $query->orderBy('name', 'DESC');
                })
                ->when(($request->filter == 'recentlyCreated'), function (Builder $query) {
                    $query->orderBy('created_at', 'DESC');
                })
                ->when(($request->filter == 'recentlyUpdated'), function (Builder $query) {
                    $query->orderBy('updated_at', 'DESC');
                })
                ->where('visibility', 'show')
                ->get();

                $identify = 'notAllBook';
                $parent_id = $request->parent_id;
        }
        if(!empty($request->filter)) {
            $filter_name = $request->filter;
        } else {
            $filter_name = '';
        }

        return view('home', ['collections' => $collections, 'allBooks' => $allBooks, 'identify' => $identify, 'parent_id' => $parent_id, 'filter_name' => $filter_name]);
    }

    public function storeCollection(Request $request)
    {
        Collection::create([
            'name' => $request->name,
            'created_by' => auth()->user()->id
        ]);

        toastr()->success('Created Successfully');
        return back();
    }

    public function storeBook(Request $request)
    {
        if(!empty($request->parentId))
        {
            $query = Book::create([
                'name' => $request->name ?? '',
                'collection_id' =>$request->parentId,
                'created_by' => auth()->user()->id ?? '',
                'slug' => Str::slug($request->name)
            ]);
        }
        else
        {
           $query = Book::create([
                'name' => $request->name ?? '',
                'created_by' => auth()->user()->id ?? '',
                'slug' => Str::slug($request->name)
            ]);
        }

        $data = [
            ['name' => 'Coverage','book_id' => $query->id],
            ['name' => 'Front Matter','book_id' => $query->id],
        ];
        
        BookSections::insert($data);

        toastr()->success('Created Successfully');
        return back();
    }

    public function archived($id) 
    {
        $book = Book::find($id);

        $book->update([
            'visibility' => 'hide'
        ]);

        toastr()->success('Archived Successfully');
        return back();

    }
}
