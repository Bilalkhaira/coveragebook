@extends('layouts.book_master')

@section('content')
<section class="body">
    <div class="container-fluid" style="background: #fafafa">
        <div class="row" id="rws">
            <div class="col-md-9 mt-5 pb-5">
                <div>
                    <a href="{{ route('book.index', $book->id ?? '') }}" class="text-success hover:text-green-darker">{{ $book->name ?? ''}}</a>
                    <span class="opacity-50">/</span>
                    <span class="opacity-60">Front Matter</span>
                </div>
                <span class="new">Highlights</span>
                <span class="text-secondary">0 itoms</span>
            </div>
            <div class="col-md-3 text-right">
                <a href="{{ route('book.preview', $book->slug ?? '') }}" target="_blank">
                    <button type="button" class="btn mt-5 pr-5" id="prviw" data-toggle="modal" data-target="#">
                        <img src="{{ asset('img/eye.png') }}" alt="" width="24" style="margin-right: 9; margin-bottom: 3px;">
                        Preview Book
                    </button>
                </a>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-3">
                <div class="card p-1 matric_height" id="shadow" type="button" data-toggle="modal" data-target="#hideShow">
                    <div class="row">
                        <div class="col-md-8">
                            <h6 class="ml-2 mt-1">Show/hide Highlights</h6>
                            <h5 class="clr ml-2">Visible</h5>
                        </div>
                        <div class="col-md-4 text-right">
                            <a href="" class="btn mt-2" style="background: lavender;">
                                <img src="{{ asset('img/eye.png') }}" alt="" width="30" class="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @if(!empty($bookLinkSec))
            @forelse($bookLinkSec as $sectionLink)
            <div class="col-md-3">
                <div class="coverage_grid_view coverage_grid_vieww">
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <a href="{{ route('book.highlights.store', $sectionLink->id ?? '') }}" class="coverage_highlight_btn">
                                <i class="bookmark fa-solid fa-star"></i>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{ $sectionLink->links ?? ''}}" class="hightligh_a" target="_blank">
                                @if(!empty($sectionLink->image))
                               
                                @if (strpos($sectionLink->image, "/") !== false)
                                <img src="{{ $sectionLink->image }}" alt="">
                                @else
                                <img src="{{ asset('img/files/'.$sectionLink->image) }}" alt="">
                                @endif
                                @else
                                <img src="{{ asset('img/fontCover/11.png' ?? '' )}}" alt="" width="100%">
                                @endif

                                @if(!empty($sectionLink->name))
                                <p><b> {{ $sectionLink->name ?? '' }} </b></p>
                                @endif
                                @if(!empty($sectionLink->description))
                                <p> {{ $sectionLink->description ?? '' }} </p>
                                @endif
                            </a>
                        </div>

                    </div>

                </div>
            </div>
            @empty

            @endforelse
            @endif
        </div>
        <div class="row mb-3 mt-5">
            <div class="col-md-12">
                <div class="text-center" style="width:100%;height: 250px;padding-top: 100px;border-radius: 16px; border: 2px dashed gray;">
                    <h3>Showcase your best bits of coverage as highlights</h3>
                    <p class="text-secondary">Click the found on each piece of coverage in your book</p>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal" id="hideShow">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Show/hide highlights</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <form action="/action_page.php">

                    <div class="form-group text-center">
                        <p>If you would prefer to not show a highlights section in your book you can hide this area from public view.</p>
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-4 text-center">
                            <p><b>Show highlights section</b></p>
                            <div class="coverageSecDetailTab">
                                <p class="coverageSecDetailTab_active"><i class="fa fa-eye"></i></p>
                                <span class="coverageSecDetailTab_active"></span>
                            </div>
                            <p>Display your highlighted coverage at the top of your book.</p>
                        </div>

                        <div class="col-md-4 text-center">
                            <p><b>Hide highlights section</b></p>
                            <div class="coverageSecDetailTab">
                                <p><i class="fa fa-eye-slash"></i></p>
                                <span></span>
                            </div>
                            <p>The highlights section will not be shown in your book.</p>
                        </div>
                        <div class="col-md-2"></div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection