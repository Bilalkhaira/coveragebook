@extends('layouts.book_master')
@section('css')
<style>
    .icon {
        color: gray;
    }

    .dlt_btn {
        border: none;
        background-color: transparent;
    }

    .coverage_links {
        padding: 40px 10px;
        border-radius: 20px;
        margin-top: 30px;
        border: 2px dashed lightgray;
        background-color: white;
    }

    .coverage_links button {
        background-color: #02c5a3;
        color: white;
        padding: 5px 10px;
    }

    .coverage_links button:hover {
        background-color: #208775;
        color: white;
    }

    .mr-row {
        margin-right: 10px !important;
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>
<meta name="_token" content="{{csrf_token()}}" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
@endsection
@section('content')


<!-- body start -->
<section class="body">
    <div class="container-fluid">
        <div class="row" id="rws" style="background: #fafafa">
            <div class="col-md-9 mt-5 pb-5">
                <div>
                    <a href="" class="text-success hover:text-green-darker">{{ $book->name ?? ''}}</a>
                    <span class="opacity-50">/</span>
                    <span class="opacity-60">Coverage</span>
                </div>
                <p class="new coverage_icon">{{ $sectionData->name ?? ''}}<a type="button" data-toggle="modal" data-target="#editSection"> <i class="fa fa-edit"></i> </a>
                    <a href="{{ route('book.section.delete', $sectionData->id ) }}" onclick="return confirm('Are you sure you want to delete section and their files');"><i class="fa fa-trash"></i></a>
                </p>
                <p><small>{{ $sectionData->description ?? ''}}</small></p>
            </div>
            <div class="col-md-3 text-right">
                <a href="{{ route('book.preview', $bookId ?? '') }}" target="_blank">
                    <button type="button" class="btn mt-5 pr-5" id="prviw" data-toggle="modal" data-target="#">
                        <img src="{{ asset('img/eye.png') }}" alt="" width="24" height="24" style="margin-right: 9; margin-bottom: 3px;">
                        Preview Book
                    </button>
                </a>
            </div>
        </div>
        <div class="row mt-2 mb-5 no-gutters">

            <div class="col-md-2 mr-3">
                <div class="card p-2" id="shadow" type="button" data-toggle="modal" data-target="#addSlid">
                    <div class="row mr-row no-gutters">
                        <div class="col-md-9">
                            <h6 class="ml-1 mb-0 mt-1 font-weight-bold">Custom Slides</h6>
                            <p class="clr ml-1 mb-0 text-success">Add images and analytics</p>
                        </div>
                        <div class="col-md-3">
                            <a href="" class="btn mt-1" type="button" data-toggle="modal" data-target="#addSlid" id="achrcrd">
                                <img src="{{ asset('img/layout (2).png') }}" alt="" width="24" height="27" class="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-2 mr-3">
                <div class="card p-2" id="shadow" type="button" data-toggle="modal" data-target="#layout">
                    <div class="row mr-row no-gutters">
                        <div class="col-md-9">
                            <h6 class="ml-1 mb-0 mt-1  font-weight-bold">Coverage Layout</h6>
                            <p class="clr ml-1 mb-0 text-success">Full Page</p>
                        </div>
                        <div class="col-md-3">
                            <a href="" class="btn mt-1" type="button" data-toggle="modal" data-target="#layout" id="achrcrd">
                                <img src="{{ asset('img/mouth.png') }}" alt="" width="24" height="27" class="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-2 mr-3">
                <div class="card p-2" id="shadow" type="button" data-toggle="modal" data-target="#sortBy">
                    <div class="row mr-row no-gutters">
                        <div class="col-md-9">
                            <h6 class="ml-1 mb-0 mt-1  font-weight-bold">Sort covarage by</h6>
                            <p class="clr ml-1 mb-0 text-success">On-off sort</p>
                        </div>
                        <div class="col-md-3">
                            <a href="" class="btn mt-1" type="button" data-toggle="modal" data-target="#sortBy" id="achrcrd">
                                <img src="{{ asset('img/cover.png') }}" alt="" width="24" height="27" class="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-2">
                <div class="card p-2" id="shadow" type="button" data-toggle="modal" data-target="#hideShow">
                    <div class="row mr-row no-gutters">
                        <div class="col-md-9">
                            <h6 class="ml-1 mb-0 mt-1  font-weight-bold">Show/hide</h6>
                            <p class="clr ml-1 mb-0 text-success">{{ $sectionData->visibility ?? 'show'}}</p>
                        </div>
                        <div class="col-md-3">
                            @if(!empty($sectionData->visibility))
                            <a href="" class="btn mt-1" type="button" data-toggle="modal" data-target="#hideShow" id="achrcrd">
                                @if($sectionData->visibility == 'show')
                                <i class="fa fa-eye"></i>
                                @else
                                <i class="fa fa-eye-slash"></i>
                                @endif
                            </a>
                            @else
                            <a href="" class="btn mt-1" type="button" data-toggle="modal" data-target="#hideShow" id="achrcrd">
                                <img src="{{ asset('img/eye.png') }}" alt="" width="24" height="27" class="">
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row coverage_select">
                    @if(!empty($sectionSlides[0]))
                    <div class="col-md-12">
                        <h3>Custom Slides</h3>
                    </div>
                    <!-- <div class="col-md-12">
                        <div class="inlineBlock">
                            <input type="checkbox" name="" id="select_all">
                            <span>Select</span>
                        </div>

                        <div class="inlineBlock select_all_hide no_display">
                            <i class="fa fa-trash"></i>
                            <span>Remove Item</span>
                        </div>

                        <div class="inlineBlock select_all_hide no_display">
                            <div class="dropdown">
                                <button class="dropdown-toggle" data-toggle="dropdown">
                                    Dropdown button
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#"><i class="fa-solid fa-arrow-up"></i> Start of this section</a>
                                    <a class="dropdown-item" href="#"><i class="fa-solid fa-arrow-down"></i>End of this section</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i class="fa-solid fa-arrow-right"></i>Move to position:</a>
                                    <a class="dropdown-item" href="#">
                                        <select name="" id="" class="form-control">
                                            <option value="">1</option>
                                            <option value="">2</option>
                                        </select>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i class="fa-solid fa-plus"></i>Add new section</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i class="fa-solid fa-arrow-right"></i>Move to section:</a>
                                    <a class="dropdown-item" href="#">
                                        <select name="" id="" class="form-control">
                                            <option value="">new section</option>
                                            <option value="">old section</option>
                                        </select>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div> -->
                    @endif

                </div>
                <div class="row">
                    @if(!empty($sectionSlides))
                    @foreach($sectionSlides as $sectionSlide)
                    <div class="col-md-3">
                        <div class="coverage_grid_view">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="checkbox">
                                </div>
                                <div class="col-md-8 text-right">
                                    <!-- <a href="#"><i class="fa fa-copy"></i></a> -->
                                    <!-- <a href="#"><i class="fa fa-star"></i></a> -->
                                    <!-- <a href="#"><i class="icon fa fa-trash"></i></a> -->
                                    <form action="{{ route('book.fileDestroy') }}" method="POST">
                                        @csrf
                                        <button class="dlt_btn" type="submit" onclick="return confirm('Are you sure you want to delete?');"><i class="icon fa fa-trash"></i></button>
                                        <input type="hidden" value="{{ $sectionSlide->file_name }}" name="filename">
                                        <input type="hidden" value="{{ $bookId ?? ''}}" name="bookId">
                                        <input type="hidden" value="{{ $sectionSlide->section_id ?? ''}}" name="sectionId">
                                    </form>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    @if(substr($sectionSlide->file_name, strpos($sectionSlide->file_name, ".") + 1) == 'pdf')

                                    <object data="{{ asset('img/files/'.$sectionSlide->file_name) }}" type="application/pdf" width="100%" height="335px">
                                        <p>Unable to display PDF file. <a href="{{ asset('img/files/'.$sectionSlide->file_name) }}">Download</a> instead.</p>
                                    </object>
                                    @else
                                    <img src="{{ asset('img/files/'.$sectionSlide->file_name) }}" alt="">
                                    @endif
                                </div>
                            </div>
                            <div class="row edit">
                                <div class="col-md-8" style="overflow: hidden;">
                                    <p>{{ $sectionSlide->name ?? $sectionSlide->file_name }}</p>
                                </div>
                                <div class="col-md-4 text-right">
                                    <a href="{{ route('book.editSlide', [$sectionSlide->id, $bookId] ) }}"><i class="icon fa fa-edit"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>

            </div>

            <div class="container-fluid">
                <div class="row coverage_select">
                    @if(!empty($sectionLinks[0]))
                    <div class="col-md-12">
                        <h3>Coverage</h3>
                    </div>
                    <div class="col-md-6">
                        <!-- <div class="inlineBlock">
                            <input type="checkbox" name="" id="select_all">
                            <span>Select</span>
                        </div>

                        <div class="inlineBlock select_all_hide no_display">
                            <i class="fa fa-trash"></i>
                            <span>Remove Item</span>
                        </div>

                        <div class="inlineBlock select_all_hide no_display">
                            <div class="dropdown">
                                <button class="dropdown-toggle" data-toggle="dropdown">
                                    Dropdown button
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#"><i class="fa-solid fa-arrow-up"></i> Start of this section</a>
                                    <a class="dropdown-item" href="#"><i class="fa-solid fa-arrow-down"></i>End of this section</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i class="fa-solid fa-arrow-right"></i>Move to position:</a>
                                    <a class="dropdown-item" href="#">
                                        <select name="" id="" class="form-control">
                                            <option value="">1</option>
                                            <option value="">2</option>
                                        </select>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i class="fa-solid fa-plus"></i>Add new section</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i class="fa-solid fa-arrow-right"></i>Move to section:</a>
                                    <a class="dropdown-item" href="#">
                                        <select name="" id="" class="form-control">
                                            <option value="">new section</option>
                                            <option value="">old section</option>
                                        </select>
                                    </a>
                                </div>
                            </div>
                        </div> -->

                    </div>
                    <div class="col-md-6 text-right">
                        <div class="btn-group">

                            <button type="button" class="btn btn-outline-secondary grid_view_btn"><i class="fa fa-bars"></i>Grid View</button>
                            <button type="button" class="btn btn-outline-secondary list_view_btn"><i class="fa fa-bars"></i>List View</button>

                        </div>
                    </div>
                    @endif
                </div>

                <div class="row">
                    @if(!empty($sectionLinks))
                    @forelse($sectionLinks as $sectionLink)
                    <div class="col-md-3">
                        <div class="coverage_grid_view coverage_grid_vieww">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="checkbox">
                                </div>
                                <div class="col-md-8 text-right">
                                    <a href="{{ route('book.coverage.deleteLink', $sectionLink->id) }}" onclick="return confirm('Are you sure you want to delete?');"><i class="icon fa fa-trash"></i></a>
                                    <input type="hidden" value="{{ $sectionLink->id ?? ''}}" id="editLinkId">
                                    <a href="{{ route('book.highlights.store', $sectionLink->id ?? '') }}" class="coverage_highlight_btn">
                                        @if($sectionLink->hightlight_status == 'active')
                                        <i class="bookmark fa-solid fa-star"></i>
                                        @else
                                        <i class="fa-regular fa-star"></i>
                                        @endif
                                    </a>
                                    <a class="edit_link" data-toggle="modal" data-target="#editLinks"><i class="icon fa fa-edit"></i></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    @if(!empty($sectionLink->name))
                                    <p><b>{{$sectionLink->name ?? ''}}</b></p>
                                    @endif
                                    @if(!empty($sectionLink->image))
                                    <img src="{{ asset('img/files/'.$sectionLink->image) }}" alt="">
                                    @else
                                    <img src="{{ asset('img/fontCover/11.png' ?? '' )}}" alt="" width="100%">
                                    @endif

                                    @if(!empty($sectionLink->description))
                                    <p> {{ $sectionLink->description ?? '' }} </p>
                                    @endif
                                    
                                </div>
                                <div class="col-md-12">
                                <a class="btn btn-outline-primary btn-sm mt-3 float-right" href="{{ $sectionLink->links ?? ''}}" target="_blank">read More</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    @empty

                    @endforelse
                    @endif
                </div>


                <div class="row">
                    @if(!empty($sectionLinks))
                    @forelse($sectionLinks as $sectionLink)
                    <div class="col-md-12">
                        <div class="coverage_list_view no_display">
                            <div class="row">

                                <div class="col-md-6">
                                    <input type="checkbox" name="lang">
                                    @if(!empty($sectionLink->name))
                                    <b>{{$sectionLink->name ?? ''}}</b><br>
                                    @endif
                                    @if(!empty($sectionLink->image))
                                    <img src="{{ asset('img/files/'.$sectionLink->image) }}" width="100px" alt="">
                                    @else
                                    <img src="{{ asset('img/fontCover/11.png' ?? '' )}}" alt="" width="100%">
                                    @endif

                                    @if(!empty($sectionLink->description))
                                    <p> {{ $sectionLink->description ?? '' }} </p>
                                    @endif
                                </div>
                                <div class="col-md-6 text-right">
                                    <a href="{{ route('book.coverage.deleteLink', $sectionLink->id) }}" onclick="return confirm('Are you sure you want to delete?');"><i class="icon fa fa-trash"></i></a>
                                    <input type="hidden" value="{{ $sectionLink->id ?? ''}}" id="editLinkId">
                                    <a type="button" class="edit_link" data-toggle="modal" data-target="#editLinks"><i class="icon fa fa-edit"></i></a>
                                </div>

                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-md-12">
                        <div class="coverage_links">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <p>This section has no coverage items yet.</p>
                                    <p>You can add new coverage straight into a section or select existing coverage & move it into this section.</p>
                                    <button class="btn" type="button" data-toggle="modal" data-target="#addLinks"><i class="fa-solid fa-link"></i> Add Coverage Links</button>
                                    <a href="{{ route('book.upload_covarage_file', $bookId) }}" class="btn buttonn"> <i class="fa-regular fa-file-image"></i> Upload Coverage Files</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforelse
                    @endif

                </div>

            </div>
        </div>
</section>

<div class="modal" id="hideShow">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Edit section details</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <form action="{{ route('book.coverage.updateStatus') }}" method="POST">
                    @csrf

                    <div class="form-group text-center">
                        <p>Report on the numbers without presenting your coverage by<b> hiding this section </b> from your book. The coverage items won’t appear, but the metrics will still contribute to the metrics summary totals.</p>
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-4 text-center">
                            <p><b>Show section</b></p>
                            <div class="coverageSecDetailTab">
                                <input type="hidden" id="showHide" value="show">
                                <p class="@if(isset($sectionData->visibility) && $sectionData->visibility== 'show') ? coverageSecDetailTab_active @endif"><i class="fa fa-eye"></i></p>
                                <span class="@if(isset($sectionData->visibility) && $sectionData->visibility== 'show') ? coverageSecDetailTab_active @endif"></span>
                            </div>
                            <p>Show this section and its coverage in your book.</p>
                        </div>

                        <div class="col-md-4 text-center">
                            <p><b>Hide section</b></p>
                            <div class="coverageSecDetailTab">
                                <input type="hidden" id="showHide" value="hide">
                                <p class="@if(isset($sectionData->visibility) && $sectionData->visibility== 'hide') ? coverageSecDetailTab_active @endif"><i class="fa fa-eye-slash"></i></p>
                                <span class="@if(isset($sectionData->visibility) && $sectionData->visibility== 'hide') ? coverageSecDetailTab_active @endif"></span>
                            </div>
                            <p>Hide in your book. Metrics still count towards metrics summary totals.</p>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <input type="hidden" name="status" id="hideShowInput" value="show">
                    <input type="hidden" name="updateRow" value="{{ $sectionData->id ?? ''}}">
                    <input type="hidden" name="bookId" value="{{ $bookId ?? ''}}">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="sortBy">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Sort coverage</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <form action="{{ route('book.coverage.sortBy') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <p>Sort all coverage in this section by a metric or by date.</p>
                        <p> <small> You’ll need to do this again if you change data, add coverage or manually change the order in this section.</small></p>
                        <select name="filter" class="form-control">
                            <option value="title_a_z">Title (A-Z)</option>
                            <option value="title_z_a">Title (Z-A)</option>
                            <option value="outlet_a_z">Outlet name (A-Z)</option>
                            <option value="outlet_z_a">Outlet name (Z-A)</option>
                        </select>
                        <input type="hidden" name="bookId" value="{{ $bookId ?? ''}}">
                        <input type="hidden" name="sectionId" value="{{ $sectionId ?? ''}}">
                        <p></p>
                        <input type="checkbox" name="" id="">
                        Automatically maintain this order.
                        <p>You will not be able to move the order of clips in this section.</p>
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


<div class="modal" id="layout">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Edit section details</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <form action="{{route('book.coverage.storeLayout')}}" method="POST">
                    @csrf
                    <div class="form-group text-center">
                        <p>Choose how to present the coverage in this section in your book.</p>
                    </div>
                    <div class="row">
                        @if(!empty($sectionData->layout_id))
                        <div class="col-md-4 text-center">
                            <p><b>{{ $allLayout[0]->name ?? 'Full Page'}}</b></p>
                            <div class="coverageSecDetailTab">
                                <p class="@if(isset($sectionData->layout_id) && $sectionData->layout_id==1) ? coverageSecDetailTab_active @endif"><i class="fa fa-pager"></i></p>
                                <span class="@if(isset($sectionData->layout_id) && $sectionData->layout_id==1) ? coverageSecDetailTab_active @endif"></span>
                                <input type="hidden" id="layoutInput" value="{{ $allLayout[0]->id ?? ''}}">
                            </div>
                            <p>Great for showcasing coverage in its full glory.</p>
                        </div>

                        <div class="col-md-4 text-center">
                            <p><b> {{ $allLayout[1]->name ?? 'Grid'}}</b></p>
                            <div class="coverageSecDetailTab">
                                <p class="@if(isset($sectionData->layout_id) && $sectionData->layout_id==2) ? coverageSecDetailTab_active @endif"><i class="fa-solid fa-table-cells"></i></p>
                                <span class="@if(isset($sectionData->layout_id) && $sectionData->layout_id==2) ? coverageSecDetailTab_active @endif"></span>
                                <input type="hidden" id="layoutInput" value="{{ $allLayout[1]->id ?? ''}}">
                            </div>
                            <p>Perfect for presenting lots of coverage in a visual, easy to digest way.</p>
                        </div>

                        <div class="col-md-4 text-center">
                            <p><b> {{ $allLayout[2]->name ?? 'List'}}</b></p>
                            <div class="coverageSecDetailTab">
                                <p class="@if(isset($sectionData->layout_id) && $sectionData->layout_id==3) ? coverageSecDetailTab_active @endif"><i class="fa fa-list"></i></p>
                                <span class="@if(isset($sectionData->layout_id) && $sectionData->layout_id==3) ? coverageSecDetailTab_active @endif"></span>
                                <input type="hidden" id="layoutInput" value="{{ $allLayout[2]->id ?? ''}}">
                            </div>
                            <p>Ideal for large amounts of coverage where data is more important than visuals.</p>
                        </div>
                        @else
                        <div class="col-md-4 text-center">
                            <p><b>Full Page</b></p>
                            <div class="coverageSecDetailTab">
                                <p class="coverageSecDetailTab_active"><i class="fa fa-pager"></i></p>
                                <span class="coverageSecDetailTab_active"></span>
                            </div>
                            <p>Great for showcasing coverage in its full glory.</p>
                        </div>

                        <div class="col-md-4 text-center">
                            <p><b>Grid</b></p>
                            <div class="coverageSecDetailTab">
                                <p><i class="fa-solid fa-table-cells"></i></p>
                                <span></span>
                            </div>
                            <p>Perfect for presenting lots of coverage in a visual, easy to digest way.</p>
                        </div>

                        <div class="col-md-4 text-center">
                            <p><b>List</b></p>
                            <div class="coverageSecDetailTab">
                                <p><i class="fa fa-list"></i></p>
                                <span></span>
                            </div>
                            <p>Ideal for large amounts of coverage where data is more important than visuals.</p>
                        </div>
                        @endif
                    </div>
                    <input type="hidden" value="{{ $sectionData->layout_id ?? ''}}" name="layoutId" id="layoutId">
                    <input type="hidden" value="{{ $sectionData->id ?? ''}}" name="updateRow">
                    <div class="form-group text-center">
                        <p>Hit save, then preview your book to see your chosen layout in action.</p>
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


<div class="modal" id="addSlid">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Add slides</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">

                <div class="form-group text-center">
                    <p>Each file/page will be added as a Slide within this section.</p>
                    <p> <small> Supported file types: JPG, PNG, GIF, PDF </small></p>
                </div>
                <form method="post" action="{{route('book.addNewSlideFiles')}}" enctype="multipart/form-data" class="dropzone" id="dropzone">
                    @csrf
                    <input type="hidden" name="parrentId" value="{{ $sectionId ?? ''}}">
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success" data-dismiss="modal" id="add_files_btn">Add Section</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="addLinks">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Add Coverage Links</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <form method="POST" action="{{route('book.coverage.storeLinks')}}">
                    @csrf
                    <div class="form-group">
                        <p><b>Paste the URLs to your coverage in here</b></p>
                        <p> <small> Add your links to online articles, social media posts, YouTube videos... Maximum 250 at a time. 199 remaining in your plan </small></p>
                    </div>
                    <div class="form-group">
                        <textarea name="link" id="" cols="30" rows="5" class="form-control" placeholder="awesomewebsite.com/yourcoverage" required></textarea>
                        <input type="hidden" name="bookId" value="{{ $bookId ?? ''}}">
                    </div>
                    <div class="form-group">
                        <b>Choose which section to import your coverage into</b><br>
                        <small>Divide your coverage into sections for easy grouping, sorting and presentation e.g. by media type or location.</small>
                        <select class="form-control" name="sectionId">
                            @if(!empty($allSections))
                            @foreach($allSections as $section)
                            <option value="{{ $section->id }}">{{ $section->name }}</option>
                            @endforeach
                            @endif
                        </select>
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

<div class="modal" id="editLinks">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Edit outlet details</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <form method="POST" action="{{route('book.coverage.updataLink')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="avatar-upload">
                                    <div class="avatar-edit">
                                        <input type='file' id="imageUpload" name="file_photo" accept=".png, .jpg, .jpeg" />
                                        <label for="imageUpload"></label>
                                    </div>
                                    <div class="avatar-preview">
                                        <div id="imagePreview">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <p><small>An image or logo to represent the outlet.</small></p>
                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <b>Outlet name</b><br>
                        <small>Name of the publication, website, social media account, TV show...</small>
                        <input type="text" class="form-control" id="link_name" name="name">
                        <input type="hidden" class="form-control" name="updatedId" id="updatedId">
                    </div>

                    <div class="form-group">
                        <b>Outlet description</b><br>
                        <small>Add additional context with a short description or bio.</small>
                        <textarea name="description" id="link_desc" cols="30" rows="5" class="form-control"></textarea>
                    </div>

                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value=""> <b>Apply these changes next time this outlet is featured</b>
                        </label>
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

<div class="modal" id="editSection">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Edit Section</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <form action="{{ route('book.section.update') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <b>Name</b><br>
                        <input type="text" class="form-control" name="name" value="{{ $sectionData->name ?? ''}}" required>
                        <input type="hidden" name="rowId" value="{{ $sectionData->id ?? ''}}">
                    </div>
                    <div class="form-group">
                        <b>Description</b><br>
                        <textarea name="desc" id="" cols="30" rows="3" class="form-control">{{ $sectionData->description ?? ''}}</textarea>
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
@section('scripts')

<script type="text/javascript">
    $(document).on("click", ".edit_link", function(e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        $.ajax({
            data: {
                id: $(this).closest('div').find("#editLinkId").val()
            },
            url: "{{ route('book.coverage.editLink') }}",
            type: "POST",
            dataType: "json",

            success: function(data) {

                var path = '<?php echo asset('img/files/') ?>';
                $("body").find("#updatedId").val(data.id);
                $("body").find("#link_name").val(data.name);
                $("body").find("#link_desc").val(data.description);
                $('#imagePreview').css('background-image', 'url(' + path + '/' + data.image + ')');
            }
        });
    });





    Dropzone.options.dropzone = {
        maxFilesize: 12,
        renameFile: function(file) {
            var dt = new Date();
            var time = dt.getTime();
            return time + file.name;
        },
        acceptedFiles: ".jpeg,.jpg,.png,.gif,.pdf",
        addRemoveLinks: true,
        timeout: 5000,
        removedfile: function(file) {
            var name = file.upload.filename;
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                },
                type: 'POST',
                url: '{{ route("book.fileDestroy") }}',
                data: {
                    filename: name
                },
                success: function(data) {
                    toastr.success('Image Remove Successfully');
                },
                error: function(e) {
                    console.log(e);
                }
            });
            var fileRef;
            return (fileRef = file.previewElement) != null ?
                fileRef.parentNode.removeChild(file.previewElement) : void 0;
        },
        success: function(file, response) {},
        error: function(file, response) {
            return false;
        }
    };
    $('#add_files_btn').on('click', function() {
        toastr.success('Image Upload Successfully');
        location.reload();
    });
</script>




<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                $('#imagePreview').hide();
                $('#imagePreview').show();
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imageUpload").change(function() {
        readURL(this);
    });


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

    $(document).on("click", ".grid_view_btn", function(e) {
        e.preventDefault();
        $("body").find(".coverage_list_view").addClass("no_display");
        $("body").find('.coverage_grid_vieww').removeClass("no_display");
    });

    $(document).on("click", ".list_view_btn", function(e) {
        e.preventDefault();
        $("body").find(".coverage_grid_vieww").addClass("no_display");
        $("body").find('.coverage_list_view').removeClass("no_display");
    });

    $(document).on("click", "#select_all", function(e) {

        if (this.checked) {
            $(':checkbox').each(function() {
                this.checked = true;
                $("body").find('.select_all_hide').removeClass("no_display");
            });
        } else {
            $(':checkbox').each(function() {
                this.checked = false;
                $("body").find('.select_all_hide').addClass("no_display");
            });
        }
    });
</script>
@endsection