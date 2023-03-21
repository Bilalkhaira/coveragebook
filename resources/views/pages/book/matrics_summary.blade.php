@extends('layouts.book_master')

@section('content')

<section class="body">
    <div class="container-fluid" style="background: #fafafa">
        <div class="row" id="rws">
            <div class="col-md-9 mt-5">
                <div>
                    <a href="" class="text-success hover:text-green-darker">New Book 2023</a>
                    <span class="opacity-50">/</span>
                    <span class="opacity-60">Front Matter</span>
                </div>
                <p class="new mtrics_h">Matrics Summary</p>
            </div>
            <div class="col-md-3 text-right">
                <a href="{{ route('book.preview') }}" target="_blank">
                    <button type="button" class="btn mt-5 pr-5" id="prviw" data-toggle="modal" data-target="#">
                        <img src="{{ asset('img/eye.png') }}" alt="" width="24" height="24" style="margin-right: 9; margin-bottom: 3px;">
                        Preview Book
                    </button>
                </a>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-3">
                <div class="card p-1" id="shadow">
                    <div class="row">
                        <div class="col-md-8">
                            <h5 class="ml-2 mt-1">Choose Matrics</h5>
                            <h6 class="clr text-success ml-2">7 avaiable</h5>
                        </div>
                        <div class="col-md-4 text-right">
                            <a href="" class="btn mt-2" style="background: lavender;">
                                <img src="{{ asset('img/book.png') }}" alt="" width="30" height="30" class="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-1" id="shadow" type="button" data-toggle="modal" data-target="#hideShow">
                    <div class="row">
                        <div class="col-md-8">
                            <h5 class="ml-2 mt-1">Show/hide</h5>
                            <h6 class="text-success ml-2">Visible</h6>
                        </div>
                        <div class="col-md-4 text-right">
                            <a href="" class="btn mt-2" style="background: lavender;">
                                <img src="{{ asset('img/circle.png') }}" alt="" width="30" height="30" class="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-1" id="shadow" type="button" data-toggle="modal" data-target="#addCard">
                    <div class="row">
                        <div class="col-md-8">
                            <h5 class="ml-2 mt-1">Add Cards</h5>
                            <h6 class="clr text-success ml-2">0</h6>
                        </div>
                        <div class="col-md-4 text-right">
                            <a href="" class="btn mt-2" style="background: lavender;">
                                <img src="{{ asset('img/level.png') }}" alt="" width="30" height="30" class="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-3 mt-5">
            <div class="col-md-6">
                <div class="card text-center" id="hover">
                    <h1>1</h1>
                    <h3>Piece of Coverage</h3>
                    <p class="text-secondary">Total number of online, offline and social clips in this book</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card text-center" id="hover">
                    <h1>0</h1>
                    <h3>Estimated Views</h3>
                    <p class="text-secondary">Prediction of lifetime views of coverage, based on audience reach & engagement rate on social</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="card text-center" id="hover">
                    <h1>0</h1>
                    <h3>Audience</h3>
                    <p class="text-secondary">Combined total of publication-wide audience figures for all outlets featuring coverage</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center" id="hover">
                    <h1>3.07M</h1>
                    <h3> Engagements</h3>
                    <p class="text-secondary">Combined total of likes, comments and shares on social media platforms</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center pl-2 pr-2" id="hover">
                    <h1>0</h1>
                    <h3>Avg. Domain</h3>
                    <p class="text-secondary">A 0-100 measure of the authority of the site coverage appears on. Provided by Moz</p>
                </div>
            </div>
        </div>
        <div class="row mt-5 mb-3">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <a href="" class="text-decoration-none">
                    <div class="card p-3" style="border-radius: 16px;background: lightgray;">
                        <div class="row">
                            <div class="col-md-2 pt-2">
                                <img class="card-img-left example-card-img-responsive" src="{{ asset('img/lus.png') }}" alt="" width="80" height="80" />
                            </div>

                            <div class="col-md-10">
                                <div class="card-body mr-0 pt-1">
                                    <h4 class="card-title" style="color: black;">Add / Remove matrics your summary</h4>
                                    <p class="card-text text-secondary">46 avaiable</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>


<div class="modal" id="addCard">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Add custom card</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <form action="/action_page.php">
                    <div class="form-group">
                        <label for="name"><b>Name</b>:</br><small>This is the label for the card. It will appear in your public books and when editing.</small></label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="description"><b>Description</b>:</br><small> This helps readers to understand what this card is.</small></label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="text"><b>Value</b>:</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Create custom summary card</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="hideShow">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Show/hide summary</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <form action="/action_page.php">

                    <div class="form-group text-center">
                        <p>If you would prefer to not showcase any summary metrics in your book you can hide this area from public view.</p>
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-4 text-center">
                            <p><b>Show metrics summary</b></p>
                            <div class="coverageSecDetailTab">
                                <p class="coverageSecDetailTab_active"><i class="fa fa-eye"></i></p>
                                <span class="coverageSecDetailTab_active"></span>
                            </div>
                            <p>Display a summary of your coverage metrics at the top of your book</p>
                        </div>

                        <div class="col-md-4 text-center">
                            <p><b>Hide metrics summary</b></p>
                            <div class="coverageSecDetailTab">
                                <p><i class="fa fa-eye-slash"></i></p>
                                <span></span>
                            </div>
                            <p>The metrics summary will not be shown in your book.</p>
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