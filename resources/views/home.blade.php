@extends('layouts.master')

@section('content')

<section class="bodyc">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-9 mb-0">
        <p class="new ml-5" style="margin-top: 60px;font-weight:300">All Books</p>
      </div>

      <div class="col-md-3 mt-5">
        <div class="container">
          <button type="button" class="btn" id="main" data-toggle="modal" data-target="#modal1">
            <i class="fa-solid fa-book"></i>
            Create New Book
          </button>

          <div class="modal fade" id="modal1">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="head">Create a new Book</h4>
                  <button type="buttom" class="close" data-dismiss="modal">
                    &times;
                  </button>
                </div>
                <div class="modal-body" id="form">
                  <form action="{{ route('storeBook') }}" method="POST" class="form text-center">
                    @csrf
                    <label for="" class="label">Name your book</label><br>
                    <input type="text" class="form-control" name="name" required>

                    <label for="" class="label">Collections</label><br>
                    <select name="parentId" class="form-control">
                      <option value="">Select Collection</option>
                      @if(!empty($collections))
                      @foreach($collections as $collection)
                      <option value="{{ $collection->id }}">{{ $collection->name }}</option>
                      @endforeach
                      @endif

                    </select>

                    <button class="btn mt-4 mb-3" type="submit" name="" value="yes" data-component="button-element" id="bttn">
                      Create book &amp; add coverage
                    </button><br>
                    <a href="" class="anchor">
                      Go to book and add coverage later
                    </a>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr style="width:87%; height: 0.4 px;background: rgb(193, 187, 187);margin-top: 25px; margin-left: 40px;">
    </div>
    <form class="example ml-2" action="{{ route('filterBooks') }}" method="POST">
      @csrf
      <div class="row mt-4">
        <div class="col-md-8" >
          <div style="max-width:390px;">
            <input type="text" class="bg-white border-outline-secondary focus:border-succees form-control" placeholder="Search books by title..." name="name">
            <button type="submit"><i class="fa fa-search text-dark font-weight-lighter"></i></button>
            <input type="hidden" name="is_allBook" value="{{ (request()->is('user/dashboard')) ? 'yes' : '' }}">
            <input type="hidden" name="parent_id" value="{{ $parent_id ?? ''}}">
            <input type="hidden" name="identify" value="{{ $identify ?? ''}}">
          </div>

        </div>
        <div class="col-md-3">
          <select name="filter" class="form-control" onchange="this.form.submit()">
            <option value="assec" @if(isset($filter_name) && $filter_name == 'assec') selected ?? '' @endif>By Name (A-Z)</option>
            <option value="desec" @if(isset($filter_name) && $filter_name == 'desec') selected ?? '' @endif>By Name (Z-A)</option>
            <option value="recentlyCreated" @if(isset($filter_name) && $filter_name == 'recentlyCreated') selected ?? '' @endif>Created Recently Created</option>
            <option value="recentlyUpdated" @if(isset($filter_name) && $filter_name == 'recentlyUpdated') selected ?? '' @endif>Created Recently Updated</option>
          </select>
        </div>

      </div>
    </form>
    <div class="row pt-4 pl-4">
      @if(!empty($allBooks))
      @foreach($allBooks as $allBook)
      <div class="col-md-6 col-lg-3 col-sm-12">
        <div class="row">
          <a href="{{ route('book.index', $allBook->id) }}" class="home_link">
            <div class="card mt-2 text-center" style="height: 400px;width: 250px;border-radius: 14px; background-color: {{$allBook->frontCover->cover_bg_color ?? '' }};">
              @if(!empty($allBook->frontCover->cover_logo))
              <img class="front_logo" src="{{ asset('img/fontCover/'.$allBook->frontCover->cover_logo ?? '' )}}" alt="" width="50px" height="50px" style="margin:auto">
              @endif
              @if(!empty($allBook->frontCover->cover_title))
              <b>{{ $allBook->frontCover->cover_title ?? ''}}</b>
              @endif

              @if(!empty($allBook->frontCover->cover_subtitle))
              <p>{{ $allBook->frontCover->cover_subtitle ?? ''}}</p>
              @endif

              @if(!empty($allBook->frontCover->cover_image))
              <img class="front_img img-fluid" src="{{ asset('img/fontCover/'.$allBook->frontCover->cover_image ?? '' )}}" alt="" width="200px" height="200px" style="margin:auto">
              @endif
            </div>
          </a>
          <div class="col-md-10">
            <a href="" style="text-decoration: none;">
              <h5 id="text" class="ml-4 mt-3">{{ $allBook->name ?? ''}}</h5>
              <div class="text-xs text-secondary opacity-60 ml-4">
                {{-- {{ $allBook->created_at->format('M d, Y') }} ・ 1 item --}}
              </div>
            </a>
          </div>
          <div class="col-md-1 mt-0">
            <div class="dropdown">
              <a href="" type="" class="text-success" data-toggle="dropdown" style="font-size: 28px;text-decoration: none;">
                <b>...</b>
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('book.index', $allBook->id) }}">Edit</a>
                <a class="dropdown-item" href="#">Share</a>
                <a class="dropdown-item" href="#">Copy</a>
                <a class="dropdown-item" href="{{ route('archived', $allBook->id) }}">Archive</a>
              </div>
            </div>
          </div>
        </div>

      </div>
      @endforeach
      @endif
    </div>

  </div>
</section>

<div class="container">
  <div class="modal fade" id="modal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="head" id="text">Create New Collection</h>
            <button type="buttom" class="close" data-dismiss="modal">
              &times;
            </button>

        </div>
        <div class="modal-body" id="form">
          <form action="{{ route('storeCollection') }}" method="POST" class="form">
            @csrf
            <h6 id="text">Organise your books into clients or brands. Or whatever kind of collection that makes sense to you…</h6><br>
            <label for="" class="label" id="text">Name</label><br>
            <input type="text" class="form-control" name="name" required>

            <button class="btn" type="submit" name="" value="" data-component="button-element" id="main">
              Create Collection
            </button>
            <a type="button" class="btn  mt-2 ml-3" data-dismiss="modal" id="clsebtn">Close</a>
          </form>
        </div>


      </div>

    </div>

  </div>
</div>
@endsection