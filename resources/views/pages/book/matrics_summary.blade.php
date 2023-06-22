@extends('layouts.book_master')
@section('css')
<style>
    .modal_hdr {
        position: fixed;
        top: 8%;
        background-color: white;
        z-index: 9999;
        width: 59.30%;
    }

    #matrics {
        height: 60%;
        position: fixed;
        top: 12%
    }

    #myScrollspy {
        position: fixed;
        top: 14%;
        padding-top: 30px;
        background-color: white;
        z-index: 9999;
        width: 10%;
        height: 54%;
        border-radius: 10px;
        padding-left: 0px;
        padding-right: 0px;
    }

    .fram_dv {
        height: 480px;
        overflow: scroll;
    }

    .ftr {
        background-color: white;
    }

    #myScrollspy a {
        color: black;
    }

    .mtric_option {
        text-align: center;
        border: 1px solid lightgray;
        border-radius: 10px;
        padding: 10px;
        background-color: #fafafa;
        margin-bottom: 15px;
        cursor: pointer;
    }

    .mtric_option .checkbox {
        display: block;
        background-color: white;
        width: 26px;
        margin: auto;
        border-radius: 100px;
        border: 1px solid lightgray;
        color: white;
    }

    #myScrollspy i {
        float: right;
        font-size: 13px;
        margin-top: 8px;
    }

    .questonIcon {
        background-color: gray;
        display: block;
        width: 20px;
        float: right;
        border-radius: 100px;
        color: white;
        font-size: 13px;
    }

    .questonIcon:hover {
        cursor: pointer;
    }

    .mtric_option h6 {
        margin-top: 20px;
        margin-bottom: 10px;
    }

    .activeTab {
        border: 1px solid #02c5a3 !important;
        background-color: white !important;
    }

    .activecheckbox {
        background-color: #02c5a3 !important;
        border: 1px solid #02c5a3 !important;
    }

    .bookMetric {
        margin-bottom: 20px;
        margin-top: 20px;
    }

    #group_name {
        width: 80%;
        float: right;
    }

    .dlt_fa {
        background-color: red;
    }

    .dlt_fa:hover {
        color: white;
    }

    .mtric_group {
        text-align: center;
        border: 1px solid lightgray;
        border-radius: 10px;
        padding: 10px;
        background-color: #fafafa;
        margin-bottom: 15px;
        cursor: pointer;
    }

    .mtric_group .checkbox {
        display: block;
        background-color: white;
        width: 26px;
        margin: auto;
        border-radius: 100px;
        border: 1px solid lightgray;
        color: white;
    }

    #getGroupId {
        visibility: hidden;
    }
</style>
@endsection
@section('content')

<section class="body">
    <div class="container-fluid" style="background: #f5f5f5">
        <div class="row" id="rws">
            <div class="col-md-9 mt-5">
                <div>
                    <a href="{{ route('book.index', $book->id ?? '') }}" class="text-success hover:text-green-darker">{{ $book->name ?? ''}}</a>
                    <span class="opacity-50">/</span>
                    <span class="opacity-60">Front Matter</span>
                </div>
                <p class="new mtrics_h">Metrics Summary</p>
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
                <div class="card p-1 matric_height" id="shadow" type="button" data-toggle="modal" data-target="#matrics">
                    <div class="row">
                        <div class="col-md-8">
                            <h5 class="ml-2 mt-1">Choose Metrics</h5>
                            <h6 class="clr text-success ml-2">{{ $metricsCount ?? ''}} avaiable</h5>
                        </div>
                        <div class="col-md-4 text-right">
                            <a href="" class="btn mt-2" style="background: lavender;">
                                <img src="{{ asset('img/book.png') }}" alt="" width="30" class="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-1 matric_height" id="shadow" type="button" data-toggle="modal" data-target="#hideShow">
                    <div class="row">
                        <div class="col-md-8">
                            <h5 class="ml-2 mt-1">Show/hide</h5>
                            <h6 class="text-success ml-2">
                                @if($book->show_matrics_summary == 1)
                                show
                                @else
                                hide
                                @endif
                            </h6>
                        </div>
                        <div class="col-md-4 text-right">
                            <a href="" class="btn mt-1" type="button" data-toggle="modal" data-target="#hideShow" id="achrcrd">
                                @if($book->show_matrics_summary == 1)
                                <i class="fa fa-eye"></i>
                                @else
                                <i class="fa fa-eye-slash"></i>
                                @endif
                            </a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-1 matric_height" id="shadow" type="button" data-toggle="modal" data-target="#addCard">
                    <div class="row">
                        <div class="col-md-8">
                            <h5 class="ml-2 mt-1">Add Cards</h5>
                            <h6 class="clr text-success ml-2">{{ $customCardCount ?? 0 }}</h6>
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

        <div class="row" style="@if(isset($book->show_matrics_summary) && $book->show_matrics_summary== 0) opacity: 0.5 @endif">
            @forelse ($bookOptions as $key => $bookOption)
            @if($key == 0 || $key == 1)
            <div class="col-md-6 bookMetric">
                <div class="card text-center" id="hover">
                    <h1>{{ $bookOption->value }}</h1>
                    <h3>{{ $bookOption->name }}</h3>
                    <p class="text-secondary">{{ $bookOption->description }}</p>
                </div>
            </div>
            @else
            <div class="col-md-3 bookMetric">
                <div class="card text-center" id="hover">
                    <h1>{{ $bookOption->value }}</h1>
                    <h3>{{ $bookOption->name }}</h3>
                    <p class="text-secondary">{{ $bookOption->description }}</p>
                </div>
            </div>
            @endif
            @empty
            <div class="col-md-12 bookMetric">
                <div class="card text-center" id="hover">
                    <p class="text-secondary">This metric summary is currently empty, it won’t show in your public book.</p>
                </div>
            </div>
            @endforelse

        </div>
        <div class="row mt-5 mb-3">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <a class="text-decoration-none" type="button" data-toggle="modal" data-target="#matrics">
                    <div class="card p-3" style="border-radius: 16px;background: lightgray;">
                        <div class="row">
                            <div class="col-md-2 pt-2">
                                <img class="card-img-left example-card-img-responsive" src="{{ asset('img/lus.png') }}" alt="" width="80" height="80" />
                            </div>

                            <div class="col-md-10">
                                <div class="card-body mr-0 pt-1">
                                    <h4 class="card-title" style="color: black;">Add / Remove metrics your summary</h4>
                                    <p class="card-text text-secondary">{{ $metricsCount ?? ''}} avaiable</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<div class="modal" id="matrics">
    <div class="modal-dialog modal-xl">
        <div class="modal-content" style="position: relative;">

            <div class="modal-header modal_hdr">
                <h4 class="modal-title">Add / remove metrics from your summary</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body modal-bdy">
                <form action="{{ route('book.matrics_summary.store') }}" method="POST">
                    @csrf
                    <input type="hidden" value="{{ $bookId ?? ''}}" name="bookId">
                    <div class="row">
                        <nav class="col-sm-3 col-4" id="myScrollspy">
                            <ul class="nav nav-pills flex-column">
                                @if(!empty($metrics))
                                @foreach($metrics as $key => $metric)
                                <li class="nav-item">
                                    <a class="nav-link" href="#section{{$key}}">{{ $metric->name ?? ''}}<i class="fa-solid fa-angle-right"></i></a>
                                </li>
                                @endforeach
                                @endif

                            </ul>
                        </nav>
                        <div class="col-md-2"></div>
                        <div class="col-md-10 fram_dv">
                            @if(!empty($metric_groups[0]))
                            <div id="" class="" style="padding: 20px;">

                                <div class="row">
                                    <div class="col-md-12">
                                        <b>Metric Groups</b>

                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    @foreach($metric_groups as $key => $metric_group)
                                    <div class="col-md-3">
                                        <div class="mtric_group @if(in_array($metric_group->id, $bookGroupIds ?? [])) ? activeTab @endif">
                                            <a href="{{ route('book.matrics_summary.deleteGroup', $metric_group->id) }}" onclick="return confirm('Are you sure you want to delete?')" class="questonIcon dlt_fa"><i class="fa fa-trash"></i></a>
                                            <span class="checkbox @if(in_array($metric_group->id, $bookGroupIds ?? [])) ? activecheckbox @endif"><i class="fa fa-check"></i></span>
                                            <h6>{{ $metric_group->name }}</h6>
                                            <input id="metrics_ids" type="hidden" value="{{ $metric_group->metric_id}}">
                                            @if(in_array($metric_group->id, $bookGroupIds ?? []))
                                            <input name="groupIds[]" id="select_unselect" type="hidden" value="{{ $metric_group->id }}">
                                            @else
                                            <input name="groupIds[]" id="select_unselect" type="hidden" value="">
                                            @endif
                                            <textarea id="getGroupId">{{ $metric_group->id }}</textarea>
                                        </div>
                                    </div>

                                    @endforeach
                                </div>

                            </div>
                            @endif





                            @if(!empty($metrics))
                            @foreach($metrics as $key => $metric)
                            <div id="section{{$key}}" class="" style="padding: 20px;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <b>{{ $metric->name ?? ''}}</b>

                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    @if(!empty($metric->options))
                                    @foreach($metric->options as $key => $option)
                                    <div class="col-md-3">
                                        <div class="mtric_option metric_group_options @if(in_array($option->id, $bookOptionsIds)) ? activeTab @endif">
                                            <span class="questonIcon" data-toggle="tooltip" data-placement="top" title="{{ $option->description ?? ''}}"><i class="fa fa-question"></i></span>
                                            <span class="checkbox @if(in_array($option->id, $bookOptionsIds)) ? activecheckbox @endif"><i class="fa fa-check"></i></span>
                                            <h6>{{ $option->name }}</h6>
                                            <p>{{ $option->value }}</p>
                                            <input class="get_optionsId_forgroup" type="hidden" value="{{ $option->id }}" id="get_option_id">
                                            @if(in_array($option->id, $bookOptionsIds))
                                            <input type="hidden" name="options[]" id="put_option_id" value="{{ $option->id }}">
                                            @else
                                            <input type="hidden" name="options[]" id="put_option_id">
                                            @endif

                                        </div>
                                    </div>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>

                    <div class="modal-footer ftr">
                        <input type="hidden" name="group_name" id="group_name">

                        <div>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success" formaction="{{ route('book.matrics_summary.store') }}">Save</button>
                            <button type="submit" class="btn btn-success" id="group_btn" formaction="{{ route('book.matrics_summary.storeGroup') }}">Create Group</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="addCard">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Add custom card</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <form action="{{ route('book.matrics_summary.storeCustomCard') }}" method="POST">
                    @csrf
                    <input type="hidden" value="{{ $bookId ?? ''}}" name="bookId">
                    <div class="form-group">
                        <label for="name"><b>Name</b>:</br><small>This is the label for the card. It will appear in your public books and when editing.</small></label>
                        <input type="text" name="title" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="description"><b>Description</b>:</br><small> This helps readers to understand what this card is.</small></label>
                        <input type="text" name="description" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="text"><b>Value</b>:</label>
                        <input type="text" name="value" class="form-control">
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
                <h4 class="modal-title">Show/hide cover</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <form action="{{ route('book.matrics_summary.updateVisibility') }}" method="POST">
                    @csrf

                    <div class="form-group text-center">
                        <p>If you would prefer to not have a front cover for your book you can hide this area from public view.</p>
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-4 text-center">
                            <p><b>Show front cover</b></p>
                            <div class="coverageSecDetailTab">
                                <input type="hidden" id="showHide" value="1">
                                <p class="@if(isset($book->show_matrics_summary) && $book->show_matrics_summary== 1) ? coverageSecDetailTab_active @endif"><i class="fa fa-eye"></i></p>
                                <span class="@if(isset($book->show_matrics_summary) && $book->show_matrics_summary== 1) ? coverageSecDetailTab_active @endif"></span>
                            </div>
                            <p>Display a front cover in your book.</p>
                        </div>

                        <div class="col-md-4 text-center">
                            <p><b>Hide front cover</b></p>
                            <div class="coverageSecDetailTab">
                                <input type="hidden" id="showHide" value="0">
                                <p class="@if(isset($book->show_matrics_summary) && $book->show_matrics_summary==0) ? coverageSecDetailTab_active @endif"> <i class="fa fa-eye-slash"></i></p>
                                <span class="@if(isset($book->show_matrics_summary) && $book->show_matrics_summary==0) ? coverageSecDetailTab_active @endif"></span>
                            </div>
                            <p>The front cover will not be shown in your book.</p>
                        </div>

                        <div class="col-md-2"></div>
                    </div>
                    <input type="hidden" name="bookId" value="{{ $bookId ?? ''}}">
                    <input type="hidden" name="status" id="hideShowInput" value="1">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).on("click", ".mtric_group", function(e) {
        var ids = JSON.parse($(this).find('#metrics_ids').val());

        var inputs = document.querySelectorAll('.get_optionsId_forgroup');
        var inputId = 'get_option_id'; //new
        if ($(this).closest('.mtric_group').find('#select_unselect').val()) {

            $(this).find('#select_unselect').val('');
            $(this).find('.checkbox').removeClass('activecheckbox');
            $(this).removeClass('activeTab');
            
            inputs.forEach(function(input) {
                ids.forEach(function(key) {
                    if (key === input.value) {
                        // var inputs = document.querySelector('input[value="' + input.value + '"]');
                        var inputs = document.querySelector(`input[value="${input.value}"][id="${inputId}"]`);

                        var closestDiv = inputs.closest('div');
                        closestDiv.classList.remove('activeTab');

                        var closest = closestDiv.querySelector('.checkbox');
                        closest.classList.remove('activecheckbox');

                        var input_val = closestDiv.querySelector('#put_option_id');
                        input_val.value = '';
                    }
                });
            });
        } else {
            $(this).find('.checkbox').addClass('activecheckbox');
            $(this).addClass('activeTab');
            var getGroupId = $(this).find('#getGroupId').val();
            $(this).find('#select_unselect').val(getGroupId);
            inputs.forEach(function(input) {
                ids.forEach(function(key) {
                    if (key === input.value) {
                        // var inputs = document.querySelector('input[value="' + input.value + '"]');
                        // var inputs = document.querySelector(`input[value="${input.value}"][id="get_option_id"]`);
                        var inputs = document.querySelector(`input[value="${input.value}"][id="${inputId}"]`);

                        var closestDiv = inputs.closest('div');
                        closestDiv.classList.add('activeTab');

                        var closest = closestDiv.querySelector('.checkbox');
                        closest.classList.add('activecheckbox');

                        var input_val = closestDiv.querySelector('#put_option_id');
                        input_val.value = inputs.value;
                    }
                });
            });

        }

    })

    $(document).on("click", ".mtric_option", function(e) {

        if ($(this).closest('.mtric_option').find('#put_option_id').val()) {

            $(this).closest('.mtric_option').find('.checkbox').removeClass('activecheckbox');
            $(this).removeClass('activeTab');

            $(this).closest('.mtric_option').find('#put_option_id').val('');

        } else {

            $(this).closest('.mtric_option').find('.checkbox').addClass('activecheckbox');
            $(this).addClass('activeTab');

            var id = $(this).closest('.mtric_option').find('#get_option_id').val();
            $(this).closest('.mtric_option').find('#put_option_id').val(id);
        }

    });


    $(document).on("click", "#group_btn", function(e) {
        var name = prompt('Please Enter Group Name');
        $("body").find('#group_name').val(name);
    })
    $(document).on("click", ".coverageSecDetailTab", function(e) {
        $("body").find('#hideShowInput').val('');
        $("body").find('.coverageSecDetailTab_active').removeClass("coverageSecDetailTab_active");
        $(this).closest('.coverageSecDetailTab').find('p').addClass('coverageSecDetailTab_active');
        $(this).closest('.coverageSecDetailTab').find('span').addClass('coverageSecDetailTab_active');

        var status = $(this).closest('.coverageSecDetailTab').find('#showHide').val();
        $("body").find('#hideShowInput').val(status);

        var layout = $(this).closest('.coverageSecDetailTab').find('#layoutInput').val();
        $("body").find('#layoutId').val(layout);

    });




    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
@endsection