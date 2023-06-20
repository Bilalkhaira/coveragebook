@extends('layouts.book_master')

@section('content')
<section class="body">
    <div class="container-fluid" style="background: #fafafa">
        <div class="row" id="rws">
            <div class="col-md-9 mt-5 pb-5">
                <div>
                    <a href="" class="text-success hover:text-green-darker">New Book 2023</a>
                    <span class="opacity-50">/</span>
                    <span class="opacity-60">Settings</span>
                </div>
                <span class="new">Book Matrics</span>
            </div>
            <div class="col-md-3 text-right">
                <a href="{{ route('book.preview') }}" target="_blank">
                    <button type="button" class="btn mt-5 pr-5" id="prviw" data-toggle="modal" data-target="#">
                        <img src="{{ asset('img/eye.png') }}" alt="" width="24" style="margin-right: 9; margin-bottom: 3px;">
                        Preview Book
                    </button>
                </a>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-3">
                <div class="card p-1" id="shadow" type="button" data-toggle="modal" data-target="#bookLinks">
                    <div class="row">
                        <div class="col-md-8">
                            <h6 class="ml-2 mt-1">Check Booklinks</h6>
                            <h5 class="clr ml-2 text-success">None Added</h5>
                        </div>
                        <div class="col-md-4 text-right">
                            <a href="" class="btn mt-2" style="background: lavender;">
                                <i class="fa-solid fa-link" style="font-size: 30px;width: 25px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card p-1" id="shadow"  type="button" data-toggle="modal" data-target="#refreshData">
                    <div class="row">
                        <div class="col-md-8">
                            <h6 class="ml-2 mt-1">Refresh Data</h6>
                            <h5 class="clr ml-2 text-success">Uload:Feb 2...</h5>
                        </div>
                        <div class="col-md-4 text-right">
                            <a href="" class="btn mt-2" style="background: lavender;">
                                <i class="fa-solid fa-arrows-rotate" style="font-size: 30px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row mt-5">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h4>Show and hide metrics on coverage items</h4>
                <p class="mt-4">These settings control which metrics are visible on
                    <strong>coverage items</strong> throughout this book.
                </p>
                <p class="mt-0">If you want to configure what cards are shown in your
                    <strong>summary,</strong> head to the
                    <a class="text-success" href="{{ route('book.matrics_summary') }}">Matric Summary</a>
                </p>


                <section class="mb-4 mt-5">
                    <h5 class="font-bold text-lg mb-3">Coverage Metrics</h5>
                    <div class="divide-y divide-gray-400 border border-gray-400 rounded overflow-hidden">
                        <div class="flex items-center border border-gray-400 p-4 bg-white">
                            <div class="pr-4">
                                <h5 class="mb-1 flex items-center">
                                    <span class="font-bold ">Views</span>
                                </h5>
                                <div class="text-sm opacity-60 text-secondary">
                                    Estimated views calculated based on audience size and social engagement
                                </div>
                            </div>
                            <div class="ml-auto">
                                <form class="inline-flex" data-remote="true" data-component="button-to" action="/238180/books/a51a63d9cdde10c2/settings/metrics_visibilities" accept-charset="UTF-8" method="post"><input type="hidden" name="_method" value="put" autocomplete="off"><input type="hidden" name="authenticity_token" value="wMv0nWzmichY2Yps4AnWW1e2R64sxCCKxUe3iEAkwIcq5L1QJTHH6AJ-_2plBDAY_fQgfpRmVfQREfMbpy18Nw" autocomplete="off">
                                    <input type="hidden" name="edition[hidden_metric_rollups]" value="coverage_book/views">

                                </form>
                            </div>
                        </div>

                        <div class="flex items-center  border border-gray-400s p-4 bg-white">
                            <div class="pr-4">
                                <h5 class="mb-1 flex items-center">
                                    <span class="font-bold ">Engagements</span>
                                </h5>
                                <div class="text-sm opacity-60 text-secondary">
                                    Total number of social engagements
                                </div>
                            </div>
                            <div class="ml-auto">
                                <form class="inline-flex" data-remote="true" data-component="button-to" action="/238180/books/a51a63d9cdde10c2/settings/metrics_visibilities" accept-charset="UTF-8" method="post"><input type="hidden" name="_method" value="put" autocomplete="off"><input type="hidden" name="authenticity_token" value="wMv0nWzmichY2Yps4AnWW1e2R64sxCCKxUe3iEAkwIcq5L1QJTHH6AJ-_2plBDAY_fQgfpRmVfQREfMbpy18Nw" autocomplete="off">
                                    <input type="hidden" name="edition[hidden_metric_rollups]" value="coverage_book/engagements">

                                </form>
                            </div>
                        </div>

                    </div>
                </section>

                <section class="mb-5">
                    <h5 class="font-bold text-lg mb-3">Outlet Metrics</h5>
                    <div class="divide-y divide-gray-400 border border-gray-400 rounded overflow-hidden">
                        <div class="flex items-center p-4 bg-white">
                            <div class="pr-4">
                                <h5 class="mb-1 flex items-center">
                                    <span class="font-bold ">Audience</span>
                                </h5>
                                <div class="text-sm opacity-60 text-secondary">
                                    Monthly unique visits or followers of the outlet
                                </div>
                            </div>
                            <div class="ml-auto">
                                <form class="inline-flex" data-remote="true" data-component="button-to" action="/238180/books/a51a63d9cdde10c2/settings/metrics_visibilities" accept-charset="UTF-8" method="post"><input type="hidden" name="_method" value="put" autocomplete="off"><input type="hidden" name="authenticity_token" value="wMv0nWzmichY2Yps4AnWW1e2R64sxCCKxUe3iEAkwIcq5L1QJTHH6AJ-_2plBDAY_fQgfpRmVfQREfMbpy18Nw" autocomplete="off">
                                    <input type="hidden" name="edition[hidden_metric_rollups]" value="coverage_book/audience">
                                </form>
                            </div>
                        </div>

                    </div>
                </section>
            </div>
        </div>

    </div>
</section>

<div class="modal" id="refreshData">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Refresh data</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <form action="/action_page.php" class="text-center">

                    <div class="form-group">
                        <p>Refreshing all metrics may take up to an hour and can only be </br> performed once every 24 hours.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Start refresh</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="bookLinks">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Backlinks</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <form action="/action_page.php">

                    <div class="form-group">
                        <p>See if any of your coverage includes backlinks to website(s) you are promoting.</p>
                        <p><b>Website URL</b> <i class="fa fa-star" style="color: red;font-size:5px"></i><br> <small>We’ll tell you if any of your coverage links back to any page on this site. You can check for links for up to 5 unique domains.</small></p>
                        <input type="text" class="form-control" placeholder="e.g. https://yourclientwebsite.com">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Monitor for Backlinks</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>






@endsection