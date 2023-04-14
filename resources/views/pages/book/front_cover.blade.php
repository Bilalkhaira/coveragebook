@extends('layouts.book_master')

@section('content')


<!-- body start -->
<section class="body">
    <div class="container-fluid" style="background: #fafafa">
        <div class="row" id="rws">
            <div class="col-md-9 mt-5 pb-5">
                <div>
                    <a href="" class="text-success hover:text-green-darker">New Book 2023</a>
                    <span class="opacity-50">/</span>
                    <span class="opacity-60">Front Matter</span>
                </div>
                <p class="new">Front Cover</p>
            </div>
            <div class="col-md-3 text-right">
                <a href="{{ route('book.preview', $book->book_id ?? '') }}" target="_blank">
                    <button type="button" class="btn mt-5 pr-5" id="prviw" data-toggle="modal" data-target="#">
                        <img src="{{ asset('img/eye.png') }}" alt="" width="24" height="24" style="margin-right: 9; margin-bottom: 3px;">
                        Preview Book
                    </button>
                </a>
            </div>
        </div>
        <div class="row mt-2 mb-5 justify-content-center no-gutters">

            <div class="col-md-2 mr-3">
                <div class="card p-2" id="shadow" type="button" data-toggle="modal" data-target="#modal1">
                    <div class="row">
                        <div class="col-md-7">
                            <h6 class="ml-1 mb-0 mt-1 font-weight-bold">Layout</h6>
                            <p class="clr ml-1 mb-0 text-success">Stacked</p>
                        </div>
                        <div class="col-md-4 text-right">
                            <a href="" class="btn mt-1" type="button" data-toggle="modal" data-target="#modal1" id="achrcrd">
                                <img src="{{ asset('img/layout (2).png') }}" alt="" width="24" height="27" class="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-2 mr-3">
                <div class="card p-2" id="shadow" type="button" data-toggle="modal" data-target="#modal2">
                    <div class="row">
                        <div class="col-md-7">
                            <h6 class="ml-1 mb-0 mt-1  font-weight-bold">Logo</h6>
                            <p class="clr ml-1 mb-0 text-success">{{ $book->cover_title ?? ''}} / {{ $book->cover_subtitle ?? ''}}</p>
                        </div>
                        <div class="col-md-4">
                            @if(!empty($book->cover_logo))
                            <a href="#" class="btn mt-1" type="button" data-toggle="modal" data-target="#modal2" id="achrcrd">
                                <img src="{{ asset('img/fontCover/'.$book->cover_logo ?? '') }}" alt="" width="24" height="27" class="">
                            </a>
                            @else
                            <a href="#" class="btn mt-1" type="button" data-toggle="modal" data-target="#modal2" id="achrcrd">
                                <img src="{{ asset('img/mouth.png') }}" alt="" width="24" height="27" class="">
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-2 mr-3">
                <div class="card p-2" id="shadow" type="button" data-toggle="modal" data-target="#modal3">
                    <div class="row">
                        <div class="col-md-7">
                            <h6 class="ml-1 mb-0 mt-1  font-weight-bold">Cover Img</h6>
                            <p class="clr ml-1 mb-0 text-success">{{ $book->cover_image_title ?? ''}}</p>
                        </div>
                        <div class="col-md-4">
                            @if(!empty($book->cover_image))
                            <a href="#" class="btn mt-1" type="button" data-toggle="modal" data-target="#modal3" id="achrcrd">
                                <img src="{{ asset('img/fontCover/'.$book->cover_image ?? '') }}" alt="" width="24" height="27" class="">
                            </a>
                            @else
                            <a href="#" class="btn mt-1" type="button" data-toggle="modal" data-target="#modal3" id="achrcrd">
                                <img src="{{ asset('img/cover.png') }}" alt="" width="24" height="27" class="">
                            </a>
                            @endif

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-2 mr-3">
                <div class="card p-2" id="shadow" type="button" data-toggle="modal" data-target="#backgrountColor">
                    <div class="row">
                        <div class="col-md-7">
                            <h6 class="ml-1 mb-0 mt-1  font-weight-bold">Bg Color</h6>
                            <p class="clr ml-1 mb-0 text-success">{{ $book->cover_bg_color ?? '#werrt23'}}</p>
                        </div>
                        <div class="col-md-4">
                            @if(!empty($book->cover_bg_color))
                            <a href="" class="btn mt-1" type="button" style="background-color: {{$book->cover_bg_color}};" data-toggle="modal" data-target="#backgrountColor" id="achrcrd">
                            </a>
                            @else
                            <a href="" class="btn mt-1" type="button" data-toggle="modal" data-target="#backgrountColor" id="achrcrd">
                                <img src="{{ asset('img/circle.png') }}" alt="" width="24" height="27" class="">
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-2">
                <div class="card p-2" id="shadow" type="button" data-toggle="modal" data-target="#hideShow">
                    <div class="row">
                        <div class="col-md-7">
                            <h6 class="ml-1 mb-0 mt-1  font-weight-bold">Show/hide</h6>
                            <p class="clr ml-1 mb-0 text-success">{{ $book->visibility ?? 'show'}}</p>
                        </div>
                        <div class="col-md-4">
                            @if(!empty($book->visibility))
                            <a href="" class="btn mt-1" type="button" data-toggle="modal" data-target="#hideShow" id="achrcrd">
                                @if($book->visibility == 'show')
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
                <div class="row mt-5 mb-5">
                    <div class="col-md-12 layout_main_col" >
                        <div class="layout_main" style="background-color: {{$book->cover_bg_color ?? 'lightgray'}};@if(isset($book->visibility) && $book->visibility== 'hide') opacity: 0.6 @endif">
                            <div class="row">
                                @if(!empty($book->cover_logo))
                                <div class="col-md-12 text-center">
                                    <img src="{{ asset('img/fontCover/'.$book->cover_logo ?? '' )}}" alt="" width="150px" height="150px">
                                </div>
                                @endif
                                @if(!empty($book->cover_title))
                                <div class="col-md-12 text-center">
                                    <h1>{{ $book->cover_title ?? ''}}</h1>
                                </div>
                                @endif

                                @if(!empty($book->cover_subtitle))
                                <div class="col-md-12 text-center">
                                    <b>{{ $book->cover_subtitle ?? ''}}</b>
                                </div>
                                @endif

                                @if(!empty($book->cover_image))
                                <div class="col-md-12">
                                <img src="{{ asset('img/fontCover/'.$book->cover_image ?? '' )}}" alt="" width="100%">
                                </div>
                                @endif
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
                <h4 class="modal-title">Show/hide cover</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <form action="{{ route('book.fount_cover.updateStatus') }}" method="POST">
                    @csrf

                    <div class="form-group text-center">
                        <p>If you would prefer to not have a front cover for your book you can hide this area from public view.</p>
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-4 text-center">
                            <p><b>Show front cover</b></p>
                            <div class="coverageSecDetailTab">
                                <input type="hidden" id="showHide" value="show">
                                <p class="@if(isset($book->visibility) && $book->visibility== 'show') ? coverageSecDetailTab_active @endif"><i class="fa fa-eye"></i></p>
                                <span class="@if(isset($book->visibility) && $book->visibility== 'show') ? coverageSecDetailTab_active @endif"></span>
                            </div>
                            <p>Display a front cover in your book.</p>
                        </div>

                        <div class="col-md-4 text-center">
                            <p><b>Hide front cover</b></p>
                            <div class="coverageSecDetailTab">
                                <input type="hidden" id="showHide" value="hide">
                                <p class="@if(isset($book->visibility) && $book->visibility=='hide') ? coverageSecDetailTab_active @endif"> <i class="fa fa-eye-slash"></i></p>
                                <span class="@if(isset($book->visibility) && $book->visibility=='hide') ? coverageSecDetailTab_active @endif"></span>
                            </div>
                            <p>The front cover will not be shown in your book.</p>
                        </div>
                       
                        <div class="col-md-2"></div>
                    </div>
                    <input type="hidden" name="bookId" value="{{ $bookId ?? ''}}">
                    <input type="hidden" name="recordRowId" value="{{ $book->id ?? ''}}">
                    <input type="hidden" name="status" id="hideShowInput" value="show">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="backgrountColor">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="head" id="text">Background color</h>
                    <button type="buttom" class="close" data-dismiss="modal">
                        &times;
                    </button>

            </div>
            <div class="modal-body" id="form">
                <form action="{{ route('book.fount_cover.backgroundColor') }}" method="POST" class="form">
                    @csrf
                    <p id="text"><b>Background color</b><br> accent colour is used on links, buttons, certain text and icons to add a customised brand flavour to the books you share.</p>
                    <div>
                        <input type="color" id="head" name="bg_color" value="#e66465" class="form-control">
                        <input type="hidden" name="bookId" value="{{ $bookId ?? ''}}">
                        <input type="hidden" name="recordRowId" value="{{ $book->id ?? ''}}">
                    </div>
                    <button class="btn mt-4 mb-3" type="submit" name="" value="" data-component="button-element" id="bttnn">
                        Save
                    </button>
                    <a type="submit" class="btn  mt-2 ml-3" data-dismiss="modal" id="clsebtn">Close</a>
                </form>
            </div>


        </div>

    </div>

</div>
<!-- modal layout -->
<div class="modal" id="modal1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Choose a front cover layout</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <form action="{{ route('book.fount_cover.storeLayout') }}" method="POST">
                    @csrf

                    <div class="form-group text-center">
                        <p>Each layout works with either your own custom image or our auto-generated coverage montage. Hit 'Save' to preview a layout.</p>
                    </div>
                    <div class="row">
                        @if(!empty($book->layout_id))

                        <div class="col-md-4 text-center">
                            <p><b>{{ $layout[0]->name ?? 'Stacked'}}</b><span class="cover_layout_new">new</span></p>
                            <div class="coverageSecDetailTab">
                                <input type="hidden" id="layoutInput" value="{{ $layout[0]->id ?? ''}}">
                                <p class="@if(isset($book->layout_id) && $book->layout_id==1) ? coverageSecDetailTab_active @endif"><i class="fa fa-pager"></i></p>
                                <span class="@if(isset($book->layout_id) && $book->layout_id==1) ? coverageSecDetailTab_active @endif"></span>
                            </div>
                            <p>Logo & title are displayed above the cover image</p>
                        </div>

                        <div class="col-md-4 text-center">
                            <p><b>{{ $layout[1]->name ?? '' }}</b><span class="cover_layout_new">new</span></p>
                            <div class="coverageSecDetailTab">
                                <input type="hidden" id="layoutInput" value="{{ $layout[1]->id ?? ''}}">
                                <p class="@if(isset($book->layout_id) && $book->layout_id==2) ? coverageSecDetailTab_active @endif"><i class="fa-solid fa-table-cells"></i></p>
                                <span class="@if(isset($book->layout_id) && $book->layout_id==2) ? coverageSecDetailTab_active @endif"></span>
                            </div>
                            <p>Logo & title on the left, image on the right</p>
                        </div>

                        <div class="col-md-4 text-center">
                            <p><b>{{ $layout[2]->name ?? ''}}</b><span class="cover_layout_new">new</span></p>
                            <div class="coverageSecDetailTab">
                                <input type="hidden" id="layoutInput" value="{{ $layout[2]->id ?? ''}}">
                                <p class="@if(isset($book->layout_id) && $book->layout_id==3) ? coverageSecDetailTab_active @endif"><i class="fa fa-list"></i></p>
                                <span class="@if(isset($book->layout_id) && $book->layout_id==3) ? coverageSecDetailTab_active @endif"></span>
                            </div>
                            <p>Logo & title overlaid on top of the cover image</p>
                        </div>
                        @else
                        <div class="col-md-4 text-center">
                            <p><b>Stacked</b><span class="cover_layout_new">new</span></p>
                            <div class="coverageSecDetailTab">
                                <input type="hidden" id="layoutInput" value="{{ $layout[0]->id ?? ''}}">
                                <p class="coverageSecDetailTab_active"><i class="fa fa-pager"></i></p>
                                <span class="coverageSecDetailTab_active"></span>
                            </div>
                            <p>Logo & title are displayed above the cover image</p>
                        </div>

                        <div class="col-md-4 text-center">
                            <p><b>Side-by-Side</b><span class="cover_layout_new">new</span></p>
                            <div class="coverageSecDetailTab">
                                <input type="hidden" id="layoutInput" value="{{ $layout[1]->id ?? ''}}">
                                <p class=""><i class="fa-solid fa-table-cells"></i></p>
                                <span class=""></span>
                            </div>
                            <p>Logo & title on the left, image on the right</p>
                        </div>

                        <div class="col-md-4 text-center">
                            <p><b>Overlaynew</b><span class="cover_layout_new">new</span></p>
                            <div class="coverageSecDetailTab">
                                <input type="hidden" id="layoutInput" value="{{ $layout[2]->id ?? ''}}">
                                <p class=""><i class="fa fa-list"></i></p>
                                <span class=""></span>
                            </div>
                            <p>Logo & title overlaid on top of the cover image</p>
                        </div>
                        @endif
                    </div>
                    <input type="hidden" name="layoutId" id="layoutId">
                    <input type="hidden" name="bookId" value="{{ $bookId ?? ''}}">
                    <input type="hidden" name="recordRowId" value="{{ $book->id ?? ''}}">
                    <div class="form-group text-center mt-10">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                    <div class="color_layout_dv">
                        <p><i class="fa fa-flag"></i>Looking for the original (legacy) layout? <a href="#"> Revert to the legacy layout</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- modal layout end-->

<!-- modal banner logo -->
<div class="container">
    <div class="modal fade" id="modal2">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="head" id="text">Logo & Text</h>
                        <button type="buttom" class="close" data-dismiss="modal">
                            &times;
                        </button>

                </div>
                <div class="modal-body" id="form">
                    <form action="{{ route('book.fount_cover.StoreLogoText') }}" method="POST" class="form" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-3">
                                <label class="cabinet center-block">
                                    <figure>
                                        <img src="" class="gambar img-responsive img-thumbnail" id="item-img-output" />
                                        <figcaption><i class="fa fa-camera"></i></figcaption>
                                    </figure>
                                    <input type="file" class="item-img file center-block" name="file_photo" />
                                </label>
                                <div class="modal fade" id="cropImagePop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">
                                                    asd</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div id="upload-demo" class="center-block"></div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="button" id="cropImageBtn" class="btn btn-primary">Crop</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <label for="" class="font-weight-bold mt-3">Logo</label>
                                <p class="text-sm text-gray-600">
                                    Set a front cover logo to appear above your title, for example a client or project logo. If you don't want a logo, simply leave it blank.
                                </p>
                                @if(!empty($book->cover_logo))
                                <a href="{{ route('book.fount_cover.deleteLogoImage', $book->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure?')">Remove</a>
                                @endif
                            </div>
                        </div>
                        <label for="" class="font-weight-bold mt-3">Title</label>
                        <p class="text-secondary text-left ml-0">Defaults to the same as the name of the book. If empty, no title will be displayed.</p>

                        <input type="text" name="title" class="form-control" value="{{ $book->cover_title ?? ''}}">
                        <label for="" class="font-weight-bold mt-3">Subtitle</label>
                        <p class="text-secondary text-left ml-0">Displayed under the title.</p>

                        <input type="text" name="sub_title" class="form-control" value="{{ $book->cover_subtitle ?? ''}}">
                        <input type="hidden" name="bookId" value="{{ $bookId ?? ''}}">
                        <input type="hidden" name="recordRowId" value="{{ $book->id ?? ''}}">

                        <button class="btn mt-4 mb-3" type="submit" data-component="button-element" id="bttnn">
                            Save
                        </button>
                        <a type="button" class="btn  mt-2 ml-3" data-dismiss="modal" id="clsebtn">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modal banner logo end-->

<!-- modal cover image -->
<div class="container">
    <div class="modal fade" id="modal3">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="head" id="text">Cover Image</h>
                        <button type="buttom" class="close" data-dismiss="modal">
                            &times;
                        </button>
                </div>
                <div class="modal-body" id="form">
                    <ul class="nav nav-tabs font_cover_tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#home">
                                <p><span class="circle"></span><b>Montage</b></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu1">
                                <p><span class="circle"></span><b>Custome Image</b></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu2">
                                <p><span class="circle"></span><b>None</b></p>
                            </a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content font_cover_tabContent">
                        <div id="home" class="container tab-pane active"><br>
                            <form action="{{ route('book.fount_cover.storeCoverImage')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>Screenshots and images from your coverage will be used to create a montage image.</p>
                                        <label for=""><b>Use Images From</b></label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Random selection</option>
                                            <option value="">First items in book</option>
                                            <option value="">Highlights</option>
                                            <option value="">Recently published items</option>
                                            <option value="">Recently added items</option>
                                            <option value="">Items in a section</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="{{ asset('img/123.png') }}" alt="" width="100%" height="200px">
                                        <input type="hidden" name="title" value="Montage">
                                        <input type="hidden" name="bookId" value="{{ $book->id ?? ''}}">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <button disabled class="btn mt-4 mb-3" type="submit" data-component="button-element" id="bttnn">
                                            Save
                                        </button>
                                        <a type="button" class="btn  mt-2 ml-3" data-dismiss="modal" id="clsebtn">Cancel</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="menu1" class="container tab-pane fade"><br>
                            <form action="{{ route('book.fount_cover.storeCoverImage')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="hidden" name="title" value="Custome Image">
                                        <input type="hidden" name="bookId" value="{{ $bookId ?? ''}}">
                                        <input type="hidden" name="recordRowId" value="{{ $book->id ?? ''}}">
                                        <p>Upload your own custom front cover image. E.g. brand/campaign imagery, graphic etc...</p>
                                        <input type="radio"> Size image to fit (stylised) <br>
                                        <input type="radio"> Size image to fill (edge to edge)
                                    </div>
                                    <div class="col-md-6">
                                        <div class="avatar-upload">
                                            <div class="avatar-edit">
                                                <input type='file' id="imageUpload" name="file_photo" accept=".png, .jpg, .jpeg" />
                                                <label for="imageUpload"></label>
                                            </div>
                                            <div class="avatar-preview">
                                                @if(!empty($book->cover_image))
                                                <div id="imagePreview" style="background-image: url({{ asset('img/fontCover/'.$book->cover_image ?? '' ) }});">
                                                </div>
                                                @else
                                                <div id="imagePreview" style="background-image: url(https://user.gadjian.com/static/images/personnel_boy.png);">
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <button class="btn mt-4 mb-3" type="submit" data-component="button-element" id="bttnn">
                                            Save
                                        </button>
                                        <a type="button" class="btn  mt-2 ml-3" data-dismiss="modal" id="clsebtn">Cancel</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="menu2" class="container tab-pane fade text-center"><br>
                            <form action="{{ route('book.fount_cover.storeCoverImage')}}" method="POST">
                                @csrf
                                <p>No cover image will be shown.</p>
                                <input type="hidden" name="title" value="None">
                                <input type="hidden" name="bookId" value="{{ $bookId ?? ''}}">
                                <input type="hidden" name="recordRowId" value="{{ $book->id ?? ''}}">
                                <hr>
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <button class="btn mt-4 mb-3" type="submit" data-component="button-element" id="bttnn">
                                            Save
                                        </button>
                                        <a type="button" class="btn  mt-2 ml-3" data-dismiss="modal" id="clsebtn">Cancel</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- modal cover {{ asset('img end-->
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

    // Start upload preview image

    if ('<?php echo $book->cover_logo ?? '' ?>') {
        var img = '<?php echo $book->cover_logo ?? '' ?>';
        var path = '<?php echo asset('img/fontCover/') ?>';
        $(".gambar").attr("src", "" + path + "/" + img + "");
    } else {
        $(".gambar").attr("src", "https://user.gadjian.com/static/images/personnel_boy.png");
    }

    var $uploadCrop,
        tempFilename,
        rawImg,
        imageId;

    function readFile(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('.upload-demo').addClass('ready');
                $('#cropImagePop').modal('show');
                rawImg = e.target.result;
            }
            reader.readAsDataURL(input.files[0]);
        } else {
            swal("Sorry - you're browser doesn't support the FileReader API");
        }
    }

    $uploadCrop = $('#upload-demo').croppie({
        viewport: {
            width: 150,
            height: 200,
        },
        enforceBoundary: false,
        enableExif: true
    });
    $('#cropImagePop').on('shown.bs.modal', function() {
        $uploadCrop.croppie('bind', {
            url: rawImg
        }).then(function() {
            console.log('jQuery bind complete');
        });
    });

    $('.item-img').on('change', function() {
        imageId = $(this).data('id');
        tempFilename = $(this).val();
        $('#cancelCropBtn').data('id', imageId);
        readFile(this);
    });
    $('#cropImageBtn').on('click', function(ev) {
        $uploadCrop.croppie('result', {
            type: 'base64',
            format: 'jpeg',
            size: {
                width: 150,
                height: 200
            }
        }).then(function(resp) {
            $('#item-img-output').attr('src', resp);
            $('#cropImagePop').modal('hide');
        });
    });
    // End upload preview image
</script>
@endsection