@extends('layouts.book_master')

@section('content')
<section class="body">
    <div class="container-fluid" style="background: #fafafa">
        <div class="row" id="rws">
            <div class="col-md-9 mt-5">
                <div>
                    <a href="{{ route('book.index', $book->id ?? '') }}" class="text-success hover:text-green-darker">{{ $book->name ?? ''}}</a>
                </div>
                <span class="new">Share your book</span>
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
        <div class="row no-gutters">
            <div class="col-md-4">
                <div class="card border-right" id="sharecrd">

                    <h3>Share Online</h3>

                    <img src="{{ asset('img/shareable.svg') }}" alt="" width="170" height="122" style="margin-left: 90px; margin-top: 20px; margin-bottom: 20px;">

                    <p class="mb-6">With a paid plan, you can create your own customised sharing link. <br> For example, "mybusiness.coveragebook.com".</p>

                    <p class="mb-6">Copy this link and send it to anyone you want to share this book with.</p>
                    <div>
                        <input class="btn border-secondary outline-secondary rounded w-75 p-2" type="text" value="{{ route('book.preview', $book->id ?? '') }}" data-target="clipboard.source " data-action="click->clipboard#copy">
                        <p id="copy_text">{{ route('book.preview', $book->id ?? '') }}</p>
                        <button class="btn btn-info mt-3 mb-3 form-control" id="copybtn" onclick="copyToClipboard('#copy_text')">
                                Copy shareable link
                        </button>
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-4">
                    <div class="card border-right" id="sharecrd">
                        <h3>Create A PDF</h3>

                        <img src="{{ asset('img/pdf-printer.svg') }}" alt="" width="170" height="122" style="margin-left: 90px; margin-top: 20px; margin-bottom: 20px;">

                        <p class="mb-6">Export your book as a PDF file, ready to send digitally or print.</p>

                        <button class="btn btn-info mt-3 mb-3" data-target="clipboard.flash" data-action="click->clipboard#copy" data-component="button-element" type="submit">
                            <span class="button-label">
                                 Start
                                  <span class="hidden lg:inline-block lg:px-[0.3em]">PDF</span>
                                  Export
                                  </span>
                        </button>
                    </div>
                </div> -->
            <!-- <div class="col-md-4">
                    <div class="card" id="sharecrd">

                        <h3>Download a CVS</h3>

                        <img src="{{ asset('img/csv-spreadsheet.svg') }}" alt="" width="170" height="122" style="margin-left: 90px; margin-top: 20px;margin-bottom: 20px;">

                        <p class="mb-6">Export all coverage and metrics to an Excel/CSV file.</p>
                        <p class="mb-6">
                            <strong>Export all coverage and metrics to an Excel/CSV file.</strong>
                        </p>

                        <button class="btn btn-info mt-3 mb-3" data-target="clipboard.flash" data-action="click->clipboard#copy" data-component="button-element" type="submit">
                            <span class="button-label">
                                 Upgrade
                                  <span class="hidden lg:inline-block lg:px-[0.3em]">
                                  Now
                                  </span>
                        </button>
                    </div>
                </div> -->
        </div>
    </div>
</section>
<script>
    function copyToClipboard(element) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).text()).select();
        document.execCommand("copy");
        $temp.remove();
        $('#copybtn').html('Copied Link')
    }
</script>

@endsection