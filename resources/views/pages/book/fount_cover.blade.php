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
                <a href="{{ route('book.preview') }}" target="_blank">
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
                            <p class="clr ml-1 mb-0 text-success">New Book</p>
                        </div>
                        <div class="col-md-4">
                            <a href="" class="btn mt-1" type="button" data-toggle="modal" data-target="#modal2" id="achrcrd">
                                <img src="{{ asset('img/mouth.png') }}" alt="" width="24" height="27" class="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-2 mr-3">
                <div class="card p-2" id="shadow" type="button" data-toggle="modal" data-target="#modal3">
                    <div class="row">
                        <div class="col-md-7">
                            <h6 class="ml-1 mb-0 mt-1  font-weight-bold">Cover Img</h6>
                            <p class="clr ml-1 mb-0 text-success">Montage</p>
                        </div>
                        <div class="col-md-4">
                            <a href="" class="btn mt-1" type="button" data-toggle="modal" data-target="#modal3" id="achrcrd">
                                <img src="{{ asset('img/cover.png') }}" alt="" width="24" height="27" class="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-2 mr-3">
                <div class="card p-2" id="shadow" type="button" data-toggle="modal" data-target="#backgrountColor">
                    <div class="row">
                        <div class="col-md-7">
                            <h6 class="ml-1 mb-0 mt-1  font-weight-bold">Bg Color</h6>
                            <p class="clr ml-1 mb-0 text-success">#eeeff0</p>
                        </div>
                        <div class="col-md-4">
                            <a href="" class="btn mt-1" type="button" data-toggle="modal" data-target="#backgrountColor" id="achrcrd">
                                <img src="{{ asset('img/circle.png') }}" alt="" width="24" height="27" class="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-2">
                <div class="card p-2" id="shadow" type="button" data-toggle="modal" data-target="#hideShow">
                    <div class="row">
                        <div class="col-md-7">
                            <h6 class="ml-1 mb-0 mt-1  font-weight-bold">Show/hide</h6>
                            <p class="clr ml-1 mb-0 text-success">Visible</p>
                        </div>
                        <div class="col-md-4">
                            <a href="" class="btn mt-1" type="button" data-toggle="modal" data-target="#hideShow" id="achrcrd">
                                <img src="{{ asset('img/eye.png') }}" alt="" width="24" height="27" class="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row mt-5 mb-5">
                    <div class="col-md-12">
                        <img src="{{ asset('img/_20230131194939.jpg') }}" alt="" style="border-radius: 20px;height: 100%; width: 100%;">
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
                <form action="/action_page.php">

                    <div class="form-group text-center">
                        <p>If you would prefer to not have a front cover for your book you can hide this area from public view.</p>
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-4 text-center">
                            <p><b>Show front cover</b></p>
                            <div class="coverageSecDetailTab">
                                <p class="coverageSecDetailTab_active"><i class="fa fa-eye"></i></p>
                                <span class="coverageSecDetailTab_active"></span>
                            </div>
                            <p>Display a front cover in your book.</p>
                        </div>

                        <div class="col-md-4 text-center">
                            <p><b>Hide front cover</b></p>
                            <div class="coverageSecDetailTab">
                                <p><i class="fa fa-eye-slash"></i></p>
                                <span></span>
                            </div>
                            <p>The front cover will not be shown in your book.</p>
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
                <form action="" class="form">
                    <p id="text"><b>Background color</b><br> accent colour is used on links, buttons, certain text and icons to add a customised brand flavour to the books you share.</p>
                    <div>
                        <input type="color" id="head" name="head" value="#e66465" class="form-control">
                    </div>
                    <button class="btn mt-4 mb-3" type="submit" name="" value="" data-component="button-element" id="bttnn">
                        Save
                    </button>
                    <a type="button" class="btn  mt-2 ml-3" data-dismiss="modal" id="clsebtn">Close</a>
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
                <form action="/action_page.php">

                    <div class="form-group text-center">
                        <p>Each layout works with either your own custom image or our auto-generated coverage montage. Hit 'Save' to preview a layout.</p>
                    </div>
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <p><b>Stacked</b><span class="cover_layout_new">new</span></p>
                            <div class="coverageSecDetailTab">
                                <p class="coverageSecDetailTab_active"><i class="fa fa-pager"></i></p>
                                <span class="coverageSecDetailTab_active"></span>
                            </div>
                            <p>Logo & title are displayed above the cover image</p>
                        </div>

                        <div class="col-md-4 text-center">
                            <p><b>Side-by-Side</b><span class="cover_layout_new">new</span></p>
                            <div class="coverageSecDetailTab">
                                <p><i class="fa-solid fa-table-cells"></i></p>
                                <span></span>
                            </div>
                            <p>Logo & title on the left, image on the right</p>
                        </div>

                        <div class="col-md-4 text-center">
                            <p><b>Overlay</b><span class="cover_layout_new">new</span></p>
                            <div class="coverageSecDetailTab">
                                <p><i class="fa fa-list"></i></p>
                                <span></span>
                            </div>
                            <p>Logo & title overlaid on top of the cover image</p>
                        </div>
                    </div>

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
                    <form action="" class="form">
                        <div class="row">
                            <div class="col-md-3">
                                <input type="file" accept="image/*" class="fsp-drop-pane__input form-control" style="width: 180px;height: 200px; border: 1px dashed gray; background: rgb(199, 198, 198);">
                            </div>
                            <div class="col-md-8">
                                <label for="" class="font-weight-bold mt-3">Logo</label>
                                <p class="text-sm text-gray-600">
                                    Set a front cover logo to appear above your title, for example a client or project logo. If you don't want a logo, simply leave it blank.
                                </p>
                            </div>
                        </div>
                        <label for="" class="font-weight-bold mt-3">Edit</label>
                        <p class="text-secondary text-left ml-0">Defaults to the same as the name of the book. If empty, no title will be displayed.</p>

                        <input type="text" value="New Book 2023" class="form-control">
                        <label for="" class="font-weight-bold mt-3">Subtitle</label>
                        <p class="text-secondary text-left ml-0">Displayed under the title.</p>

                        <input type="text" value="" class="form-control">

                        <button class="btn mt-4 mb-3" type="submit" name="" value="" data-component="button-element" id="bttnn">
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
                    <h4 class="head" id="text">Logo & Text</h>
                        <button type="buttom" class="close" data-dismiss="modal">
                            &times;
                        </button>
                </div>
                <div class="modal-body" id="form">
                    <form action="" class="form">
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
                                    </div>
                                </div>
                            </div>
                            <div id="menu1" class="container tab-pane fade"><br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>Upload your own custom front cover image. E.g. brand/campaign imagery, graphic etc...</p>
                                        <input type="radio"> Size image to fit (stylised) <br>
                                        <input type="radio"> Size image to fill (edge to edge)
                                    </div>
                                    <div class="col-md-6">
                                        <label class="cabinet center-block">
                                            <figure>
                                                <img src="" class="gambar img-responsive img-thumbnail" id="item-img-output" width="100%" style="height: 200px !important;" />
                                                <figcaption><i class="fa fa-camera"></i></figcaption>
                                            </figure>
                                            <input type="file" id="img_preview" class="item-img file center-block" name="file_photo" />
                                        </label>

                                        <div class="modal fade" id="cropImagePop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel"></h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div id="upload-demo" class="center-block"></div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        <button type="button" id="cropImageBtn" class="btn btn-success">Crop</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="menu2" class="container tab-pane fade text-center"><br>
                                <p>No cover image will be shown.</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <button class="btn mt-4 mb-3" type="submit" name="" value="" data-component="button-element" id="bttnn">
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
<!-- modal cover {{ asset('img end-->
<script>
    $(document).on("click", ".coverageSecDetailTab", function(e) {
        $("body").find('.coverageSecDetailTab_active').removeClass("coverageSecDetailTab_active");
        $(this).closest('.coverageSecDetailTab').find('p').addClass('coverageSecDetailTab_active');
        $(this).closest('.coverageSecDetailTab').find('span').addClass('coverageSecDetailTab_active');

    });

    // Start upload preview image
    $(".gambar").attr("src", "https://user.gadjian.com/static/images/personnel_boy.png");
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