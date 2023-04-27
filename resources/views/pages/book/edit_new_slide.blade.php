@extends('layouts.book_master')
@section('css')
<style>
    .slide_img {
        padding: 50px;
    }

    .slide_img img {
        width: 100%;
        margin: auto;
    }

    .dlt_form i {
        color: black;
        font-size: 25px;
    }

    .dlt_form {
        display: inline-block;
    }
</style>
@endsection

@section('content')
<section class="body">
    <div class="container-fluid" style="background: #fafafa">

        <div class="row" id="rws">
            <div class="col-md-9 mt-5 pb-5">
                <div>
                    <a href="Edit.html" class="text-success text-decoration-none hover:text-green-darker">{{ $book->name ?? ''}} / Front Metter</a>
                    <span class="opacity-50">/</span>
                    <span class="opacity-60">Edit slide</span>
                </div>
                <span class="new mb-3">{{ $slide->name ?? $slide->file_name}}</span>
                <a href="" class="button group button-icon flex-none" type="button" data-toggle="modal" data-target="#modal3">
                    <img src="{{ asset('img/edit.png') }}" alt="" width="44" height="44" style="margin-left: 12; margin-bottom: 18px;">
                </a>
                <form class="dlt_form" action="{{ route('book.fileDestroy') }}" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item" onclick="return confirm('Are you sure you want to delete?');"><i class="fa fa-trash"></i></button>
                    <input type="hidden" value="{{ $slide->file_name }}" name="filename">
                    <input type="hidden" value="1" name="by_btn">
                </form>

            </div>
            <div class="col-md-3 text-right">
                <a href="{{ route('book.preview', $book->id ?? '') }}" target="_blank">
                    <button type="button" class="btn mt-5 pr-5" id="prviw" data-toggle="modal" data-target="#">
                        <img src="{{ asset('img/eye.png') }}" alt="" width="24" height="24" style="margin-right: 9; margin-bottom: 3px;">
                        Preview Book
                    </button>
                </a>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-md-12 slide_img">
                <img class="front_logo" src="{{ asset('img/files/'.$slide->file_name ?? '' )}}">
            </div>
        </div>

    </div>

    </div>
</section>

@endsection