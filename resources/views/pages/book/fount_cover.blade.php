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
                <div class="card p-2" id="shadow" type="button" data-toggle="modal" data-target="#modal4">
                    <div class="row">
                        <div class="col-md-7">
                            <h6 class="ml-1 mb-0 mt-1  font-weight-bold">Bg Color</h6>
                            <p class="clr ml-1 mb-0 text-success">#eeeff0</p>
                        </div>
                        <div class="col-md-4">
                            <a href="" class="btn mt-1" type="button" data-toggle="modal" data-target="#modal4" id="achrcrd">
                                <img src="{{ asset('img/circle.png') }}" alt="" width="24" height="27" class="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-2">
                <div class="card p-2" id="shadow" type="button" data-toggle="modal" data-target="#modal5">
                    <div class="row">
                        <div class="col-md-7">
                            <h6 class="ml-1 mb-0 mt-1  font-weight-bold">Show/hide</h6>
                            <p class="clr ml-1 mb-0 text-success">Visible</p>
                        </div>
                        <div class="col-md-4">
                            <a href="" class="btn mt-1" type="button" data-toggle="modal" data-target="#modal5" id="achrcrd">
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
                        <label class="tablinks" onclick="openCity(event, 'London')" data-controller="radio-button-set" data-action="radio-button:checked->radio-button-set#handleCheckedStates" data-component="radio-button-set">
                            <label style="flex: 1 1 0;width: 230px;" data-controller="radio-button" data-radio-button-set-target="radio" data-component="radio-button">
                                <div class="px-4 py-3 rounded border flex items-center bg-light bg-opacity-30 border-green" data-radio-button-bind-class="{'bg-green-light bg-opacity-30 border-green': checked, 'bg-gray-100 border-gray-400': !checked }">
                                    <input type="radio" name="front_cover[visual]" id="front_cover_visual_montage" value="montage" class="focus:ring-0 h-4 w-4 text-green border-gray-400" data-radio-button-target="control" checked="checked">
                                    <strong class="ml-3 text-gray-900">Montage</strong>
                                </div>
                            </label>
                            <label style="flex: 1 1 0;width: 230px;" class="tablinks" onclick="openCity(event, 'Paris')" data-controller="radio-button" data-radio-button-set-target="radio" data-component="radio-button">
                                <div class="px-4 py-3 rounded border flex items-center bg-light border-gray-400" data-radio-button-bind-class="{'bg-green-light bg-opacity-30 border-green': checked, 'bg-gray-100 border-gray-400': !checked }">
                                    <input type="radio" name="front_cover[visual]" id="front_cover_visual_image" value="image" class="focus:ring-0 h-4 w-4 text-green border-gray-400" data-radio-button-target="control">
                                    <strong class="ml-3 text-gray-900">Custom image</strong>
                                </div>
                            </label>
                            <label style="flex: 1 1 0;width: 230px;" class="tablinks" onclick="openCity(event, 'Tokyo')" data-controller="radio-button" data-radio-button-set-target="radio" data-component="radio-button">
                                <div class="px-4 py-3 rounded border flex items-center bg-light border-gray-400" data-radio-button-bind-class="{'bg-green-light bg-opacity-30 border-green': checked, 'bg-gray-100 border-gray-400': !checked }">
                                    <input type="radio" name="front_cover[visual]" id="front_cover_visual_none" value="none" class="focus:ring-0 h-4 w-4 text-green border-gray-400" data-radio-button-target="control">
                                    <strong class="ml-3 text-gray-900">None</strong>
                                </div>
                            </label>
                        </label>
                        <div id="London" class="tabcontent">
                            <h3>London</h3>
                            <p>London is the capital city of England.</p>

                            <button class="btn mt-4 mb-3" type="submit" name="" value="" data-component="button-element" id="bttnn">
                                Save
                            </button>
                            <a type="button" class="btn  mt-2 ml-3" data-dismiss="modal" id="clsebtn">Cancel</a>
                        </div>

                        <div id="Paris" class="tabcontent">
                            <h3>Paris</h3>
                            <p>Paris is the capital of France.</p>

                            <button class="btn mt-4 mb-3" type="submit" name="" value="" data-component="button-element" id="bttnn">
                                Save
                            </button>
                            <a type="button" class="btn  mt-2 ml-3" data-dismiss="modal" id="clsebtn">Cancel</a>
                        </div>

                        <div id="Tokyo" class="tabcontent">
                            <h3>Tokyo</h3>
                            <p>Tokyo is the capital of Japan.</p>

                            <button class="btn mt-4 mb-3" type="submit" name="" value="" data-component="button-element" id="bttnn">
                                Save
                            </button>
                            <a type="button" class="btn  mt-2 ml-3" data-dismiss="modal" id="clsebtn">Cancel</a>
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

    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>
@endsection