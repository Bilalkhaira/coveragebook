@extends('layouts.book_master')
@section('css')
<style>
    .icon {
        color: gray;
    }
    .dlt_btn{
        border: none;
        background-color: transparent;
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
                    <a href="" class="text-success hover:text-green-darker">Coverage</a>
                    <span class="opacity-50">/</span>
                    <span class="opacity-60">Coverage</span>
                </div>
                <p class="new coverage_icon">Coveragea <a href="#"> <i class="fa fa-edit"></i> </a> <a href="#"> <i class="fa fa-trash"></i></a></p>
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
        <div class="row mt-2 mb-5 no-gutters">

            <div class="col-md-2 mr-3">
                <div class="card p-2" id="shadow" type="button" data-toggle="modal" data-target="#addSlid">
                    <div class="row">
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
                    <div class="row">
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
                    <div class="row">
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
                    <div class="row">
                        <div class="col-md-9">
                            <h6 class="ml-1 mb-0 mt-1  font-weight-bold">Show/hide</h6>
                            <p class="clr ml-1 mb-0 text-success">Visible</p>
                        </div>
                        <div class="col-md-3">
                            <a href="" class="btn mt-1" type="button" data-toggle="modal" data-target="#hideShow" id="achrcrd">
                                <img src="{{ asset('img/eye.png') }}" alt="" width="24" height="27" class="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row coverage_select">
                    <div class="col-md-6">
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

                    </div>
                    <div class="col-md-6 text-right">
                        <div class="btn-group">
                            <!-- <button type="button" class="btn btn-outline-secondary grid_view_btn"><i class="fa fa-bars"></i>Grid View</button> -->
                            <!-- <button type="button" class="btn btn-outline-secondary list_view_btn"><i class="fa fa-bars"></i>List View</button> -->
                        </div>
                    </div>
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
                                    </form>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <img src="{{ asset('img/files/'.$sectionSlide->file_name) }}" alt="">
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


                <div class="row">
                    <div class="col-md-12">
                        <div class="coverage_list_view no_display">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="checkbox" name="lang">
                                    <a href="#" class="edit_btn"><i class="fa fa-edit"></i></a>
                                    <img src="{{ asset('img/bbooks.jpg') }}" alt="" width="100px" height="100px">
                                </div>
                                <div class="col-md-6 text-right">
                                    <a href="#"><i class="fa fa-copy"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-trash"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

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
                <form action="/action_page.php">

                    <div class="form-group text-center">
                        <p>Report on the numbers without presenting your coverage by<b> hiding this section </b> from your book. The coverage items won’t appear, but the metrics will still contribute to the metrics summary totals.</p>
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-4 text-center">
                            <p><b>Show section</b></p>
                            <div class="coverageSecDetailTab">
                                <p class="coverageSecDetailTab_active"><i class="fa fa-eye"></i></p>
                                <span class="coverageSecDetailTab_active"></span>
                            </div>
                            <p>Show this section and its coverage in your book.</p>
                        </div>

                        <div class="col-md-4 text-center">
                            <p><b>Hide section</b></p>
                            <div class="coverageSecDetailTab">
                                <p><i class="fa fa-eye-slash"></i></p>
                                <span></span>
                            </div>
                            <p>Hide in your book. Metrics still count towards metrics summary totals.</p>
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

<div class="modal" id="sortBy">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Sort coverage</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <form action="/action_page.php">

                    <div class="form-group">
                        <p>Sort all coverage in this section by a metric or by date.</p>
                        <p> <small> You’ll need to do this again if you change data, add coverage or manually change the order in this section.</small></p>
                        <select name="" class="form-control" id="">
                            <option value="">Title (A-Z)</option>
                            <option value="">Title (Z-A)</option>
                            <option value="">Outlet name (A-Z)</option>
                            <option value="">Outlet name (Z-A)</option>
                        </select>
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
                <form action="/action_page.php">

                    <div class="form-group text-center">
                        <p>Choose how to present the coverage in this section in your book.</p>
                    </div>
                    <div class="row">
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
                    </div>

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




@endsection
@section('scripts')

<script type="text/javascript">
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
    $(document).on("click", ".coverageSecDetailTab", function(e) {
        $("body").find('.coverageSecDetailTab_active').removeClass("coverageSecDetailTab_active");
        $(this).closest('.coverageSecDetailTab').find('p').addClass('coverageSecDetailTab_active');
        $(this).closest('.coverageSecDetailTab').find('span').addClass('coverageSecDetailTab_active');

    });

    $(document).on("click", ".grid_view_btn", function(e) {
        e.preventDefault();
        $("body").find(".coverage_list_view").addClass("no_display");
        $("body").find('.coverage_grid_view').removeClass("no_display");
    });

    $(document).on("click", ".list_view_btn", function(e) {
        e.preventDefault();
        $("body").find(".coverage_grid_view").addClass("no_display");
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