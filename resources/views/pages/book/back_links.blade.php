@extends('layouts.book_master')

@section('content')
<section class="body">
    <div class="container-fluid" style="background: #fafafa">
        <div class="row" id="rws">
            <div class="col-md-9 mt-5 pb-5">
                <div>
                    <a href="{{ route('book.index', $book->id ?? '') }}" class="text-success hover:text-green-darker">{{ $book->name ?? ''}}</a>
                    <span class="opacity-50">/</span>
                    <span class="opacity-60">Settings</span>
                </div>
                <span class="new">Book Metrics</span>
            </div>
            <div class="col-md-3 text-right">
                <a href="{{ route('book.preview', $book->slug ?? '') }}" target="_blank">
                    <button type="button" class="btn mt-5 pr-5" id="prviw" data-toggle="modal" data-target="#">
                        <img src="{{ asset('img/eye.png') }}" alt="" width="24" height="24" style="margin-right: 9; margin-bottom: 3px;">
                        Preview Book
                    </button>
                </a>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-3">
                <div class="card p-1" id="shadow" type="button" data-toggle="modal" data-target="#addBackLink">
                    <div class="row">
                        <div class="col-md-8">
                            <h6 class="ml-2 mt-1">Checking BackLinks to</h6>
                            <p class="count_link">+ {{ count($bookLinks ?? '') }} more</p>
                        </div>
                        <div class="col-md-4 text-right">
                            <a href="" class="btn mt-2">
                                <img src="{{ asset('img/link.png') }}" alt="" width="50" height="50" class="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-3 mt-5">
            <div class="col-md-12">
                <div class="backlink_body">
                    <p><b>Show and hide metrics on coverage items</b></p>
                    <p>These settings control which metrics are visible on <b> coverage items </b> throughout this book.<br>
                    If you want to configure what cards are shown in your <b> summary </b>, head to the <a class="count_link" href="{{ route('book.matrics_summary', $book->id ?? '') }}"> Metrics Summary. </a></p>
                    <div class="brdr">
                        <h5>This book is currently empty</h5>
                        <p>When you’ve added coverage to this report you’ll be able to control which metrics are displayed or hidden.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal" id="addBackLink">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Backlinks</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <form action="{{ route('book.backLink.store') }}" method="POST">
                    @csrf
                    <input type="hidden" value="{{ $bookId ?? ''}}" name="bookId">
                    <div class="form-group">
                        <label for="name"><small>See if any of your coverage includes backlinks to website(s) you are promoting.</small></label>
                    </div>

                    <div class="form-group">

                        <ul>
                            @if(!empty($bookLinks))
                            @foreach($bookLinks as $bookLink)
                            <li>
                                {{ $bookLink->backlink ?? ''}}
                                <a href="{{ route('book.backLink.delete', $bookLink->id ?? '') }}"  onclick="return confirm('Are you sure you want to delete?');" class="show_link"><i class="fa fa-trash"></i></a>
                            </li>
                            @endforeach
                            @endif
                        </ul>
                    </div>

                    <div class="form-group">
                        <label for="name"><b>Website URL</b>:</br><small>We’ll tell you if any of your coverage links back to any page on this site. You can check for links for up to 5 unique domains.</small></label>
                        <input type="text" name="link" class="form-control" placeholder="e.g. https://yourclientwebsite.com" required>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn buttonn">Monitor for Backlinks</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection