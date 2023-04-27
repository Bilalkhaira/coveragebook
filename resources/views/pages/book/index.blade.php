@extends('layouts.book_master')
@section('css')
<style>
  .frontcoverCard {
    padding: 20px;
    color: black;
  }

  .front_img {
    height: 135px;
  }

  .front_logo {
    position: absolute;
    left: 44%;
  }

  .frontcoverCard h1 {
    margin-top: 47px;
  }

  .dropdown-item i {
    margin-right: 10px;
  }

  .neww {
    display: inline-block;
  }

  #addSlidParent {
    margin-top: 10px;
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
<section class="body">
  <div class="container-fluid" style="background: #fafafa">

    <div class="row" id="rws">
      <div class="col-md-9 mt-5 pb-5">
        <div>
          <a href="Edit.html" class="text-success text-decoration-none hover:text-green-darker">{{ $book->name ?? ''}}</a>
          <span class="opacity-50">/</span>
          <span class="opacity-60">Book Overview</span>
        </div>
        <span class="new mb-3">{{ $book->name ?? ''}}</span>
        <a href="" class="button group button-icon flex-none" type="button" data-toggle="modal" data-target="#modal3">
          <img src="{{ asset('img/edit.png') }}" alt="" width="44" height="44" style="margin-left: 12; margin-bottom: 18px;">
        </a>
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

    <div class="row mt-2">

      <div class="col-md-3">
        <div class="card p-2" id="shadow" type="button" data-toggle="modal" data-target="#modal1">
          <div class="row">
            <div class="col-md-8">
              <h6 class="ml-2 mt-1 font-weight-bold">Banner Logo</h6>
              <h6 class="clr ml-2">
                @if(!empty($book->banner_logo))
                Custom Logo
                @else
                Add Your Logo
                @endif
                </h5>
            </div>
            <div class="col-md-4 text-right">

              @if(!empty($book->banner_logo))
              <a href="#" class="btn mt-1" type="button" data-toggle="modal" data-target="#modal2" id="achrcrd">
                <img src="{{ asset('img/'.$book->banner_logo ?? '') }}" alt="" width="24" height="27" class="">
              </a>
              @else
              <a href="" class="btn mt-1" type="button" data-toggle="modal" data-target="#modal1" id="achrcrd">
                <img src="{{ asset('img/book.png') }}" alt="" width="30" height="30" class="mt-0">
              </a>
              @endif
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card p-2" id="shadow" type="button" data-toggle="modal" data-target="#modal2">
          <div class="row">
            <div class="col-md-8">
              <h6 class="ml-2 mt-1 font-weight-bold">Accent color</h6>
              <h6 class="text-success ml-2">{{ $book->accent_color ?? '#abb2ba'}}</h6>
            </div>
            <div class="col-md-4 text-right">

              @if(!empty($book->accent_color))
              <a href="" class="btn mt-1" type="button" style="background-color: {{ $book->accent_color }};" data-toggle="modal" data-target="#backgrountColor" id="achrcrd">
              </a>
              @else
              <a href="" class="btn mt-1" type="button" data-toggle="modal" data-target="#modal2" id="achrcrd">
                <img src="{{ asset('img/circle.png') }}" alt="" width="30" height="30" class="mt-1">
              </a>
              @endif
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3" type="button">
        <div class="card p-2" id="shadow">
          <a href="{{ route('book.matrics') }}" class="anchorTag">
            <div class="row">
              <div class="col-md-8">
                <h6 class="ml-2 mt-1 font-weight-bold">Matrics & Links</h6>
                <h6 class="clr ml-2">Rfresh/hide/show</h6>
              </div>
              <div class="col-md-4 text-right">
                <img id="achrcrd" src="{{ asset('img/level.png') }}" alt="" width="30" height="30" class="mt-1">
              </div>
            </div>
          </a>
        </div>
      </div>

    </div>

    <div class="row">
      <div class="col-md-12">
        <p class="neww ml-1">FRONT MATTER</p>
        <button type="button" class="btn mt-4 mb-3 pr-2 text-secondary" style="float: right;" id="prviw" data-toggle="modal" data-target="#addNewSlide">
          <img src="{{ asset('img/p box.png') }}" alt="" width="24" height="24">
          Add a New Slide
        </button>
      </div>
    </div>

    <div class="row mb-2">
      <div class="col-md-4">

        <a href="{{ route('book.fount_cover', $book->id ?? '') }}" class="text-decoration-none">
          <div class="card text-center frontcoverCard" id="crd" style="background-color: {{$frontCover->cover_bg_color ?? '' }};@if(isset($frontCover->visibility) && $frontCover->visibility== 'hide') opacity: 0.6 @endif">
            @if(!empty($frontCover->cover_logo))
            <img class="front_logo" src="{{ asset('img/fontCover/'.$frontCover->cover_logo ?? '' )}}" alt="" width="50px" height="50px">
            @endif
            @if(!empty($frontCover->cover_title))
            <h1>{{ $frontCover->cover_title ?? ''}}</h1>
            @endif

            @if(!empty($frontCover->cover_subtitle))
            <b>{{ $frontCover->cover_subtitle ?? ''}}</b>
            @endif

            @if(!empty($frontCover->cover_image))
            <img class="front_img" src="{{ asset('img/fontCover/'.$frontCover->cover_image ?? '' )}}" alt="" width="100%">
            @endif
          </div>
        </a>
        <p style="color: black;display: inline-block;">Front Cover</p>
        <div class="dropdown float-right dropleft">
          <a href="" type="" class="text-success" data-toggle="dropdown" style="font-size: 28px;text-decoration: none;">
            <b>...</b>
          </a>
          <div class="dropdown-menu">
            <form action="{{ route('book.fount_cover.updateStatus') }}" method="POST">
              @csrf
              <a class="dropdown-item" href="{{ route('book.fount_cover', $book->id) }}"><i class="fa fa-edit"></i>Edit</a>
              @if(!empty($frontCover->visibility) && $frontCover->visibility == 'show')
              <button type="submit" class="dropdown-item"><i class="fa-solid fa-eye-slash"></i>Hide</button>
              <input type="hidden" value="hide" name="status">
              @else
              <button type="submit" class="dropdown-item"><i class="fa-solid fa-eye"></i>Show</button>
              <input type="hidden" value="show" name="status">
              @endif
              <input type="hidden" value="{{ $frontCover->id ?? ''}}" name="recordRowId">
            </form>
          </div>
        </div>

      </div>
      <div class="col-md-4">

        <a href="{{ route('book.matrics_summary', $book->id ) }}" class="text-decoration-none">
          <div class="card p-2" id="crd" style="@if(isset($book->show_matrics_summary) && $book->show_matrics_summary== 0) opacity: 0.6 @endif">
            <div class="row">
              @if(!empty($metrics))
              @foreach($metrics as $key => $metric)
              <div class="col-md-6">
                <div class="card mt-2 text-lg-center" id="crds">
                  <h1 class="p-4">{{ $metric->metricOptions->value }}</h1>
                  <p>{{ $metric->metricOptions->name }}</p>
                </div>
              </div>
              @endforeach
              @endif

            </div>
            @if(!empty($metricsCount))
            <div class="row">
              <div class="col-md-12 p-4 mt-3">
                <div class="card text-lg-center" id="crrds">
                  <p class="p-4">+ {{ $metricsCount-2 ?? '' }} more matrics</p>
                </div>
              </div>
            </div>
            @endif

          </div>
        </a>
        <p style="color: black;display: inline-block;">Matrics Summary</p>
        <span class="text-secondary font-weight-bold">({{$metricsCount ?? ''}} items)</span>
        <div class="dropdown float-right dropleft">
          <a href="" type="" class="text-success" data-toggle="dropdown" style="font-size: 28px;text-decoration: none;">
            <b>...</b>
          </a>
          <div class="dropdown-menu">
            <form action="{{ route('book.matrics_summary.updateVisibility') }}" method="POST">
              @csrf
              <a class="dropdown-item" href="{{ route('book.matrics_summary', $book->id ) }}"><i class="fa fa-edit"></i>Edit</a>
              @if(!empty($book->show_matrics_summary == 1))
              <button type="submit" class="dropdown-item"><i class="fa-solid fa-eye-slash"></i>Hide</button>
              <input type="hidden" value="0" name="status">
              @else
              <button type="submit" class="dropdown-item"><i class="fa-solid fa-eye"></i>Show</button>
              <input type="hidden" value="1" name="status">
              @endif
              <input type="hidden" value="{{ $book->id ?? ''}}" name="bookId">
            </form>
          </div>
        </div>

      </div>
      <div class="col-md-4">

        <a href="{{ route('book.highlights', $book->id ?? '') }}" class="text-decoration-none">
          <div class="card text-center p-3" id="crd">
            <i class="fa fa-star" style="font-size: 40px;margin-top: 60px;color: #fec878"></i>
            <p class="mt-3" style="color: black;">Showcase your best bits by clicking the star <br> icons on each piece of coverage </p>
          </div>
          <span class="mt-3" style="color: black;">Highlights</span>
          <span class="text-secondary font-weight-bold">(0 itoms)</span>
        </a>

        <div class="dropdown float-right dropleft mt-0">
          <a href="{{ route('book.highlights', $book->id ?? '') }}" type="" class="text-success" data-toggle="dropdown" style="font-size: 28px;text-decoration: none;">
            <b class="mt-0">...</b>
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#"><i class="fa-solid fa-eye-slash"></i>Hide</a>
          </div>
        </div>

      </div>

    </div>
    <div class="row mb-2">
      @if(!empty($slides))
      @foreach($slides as $slide)
      <div class="col-md-4">

        <a href="{{ route('book.highlights', $book->id ?? '') }}" class="text-decoration-none">
          <div class="card text-center p-3" id="crd">
            <img src="{{ asset('img/files/'.$slide->file_name) }}" width="100%" height="100%">
          </div>
        </a>

        <p style="color: black;display: inline-block;">{{ $slide->name ?? $slide->file_name }}</p>
        <div class="dropdown float-right dropleft">
          <a href="" type="" class="text-success" data-toggle="dropdown" style="font-size: 28px;text-decoration: none;">
            <b>...</b>
          </a>
          <form action="{{ route('book.fileDestroy') }}" method="POST">
            @csrf
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{ route('book.editSlide', $slide->id ) }}"><i class="fa fa-edit"></i>Edit</a>
              <button type="submit" class="dropdown-item" onclick="return confirm('Are you sure you want to delete?');"><i class="fa fa-trash"></i>Delete</button>
              <input type="hidden" value="{{ $slide->file_name }}" name="filename">
              <input type="hidden" value="1" name="by_btn">
          </form>
        </div>
      </div>

    </div>
    @endforeach
    @endif

  </div>
  <hr style="width:1110x; height:1.5 px;background: gray;margin-top: 50px;">
  <div class="row">
    <div class="col-md-9">
      <p class="neww ml-1">BOOK CONTENTS</p>
    </div>
    <div class="col-md-3 text-right">
      <button type="button" class="btn mt-4 mb-3 pr-2 text-secondary" id="prviw" data-toggle="modal" data-target="#addNewSection">
        <img src="{{ asset('img/p box.png') }}" alt="" width="24" height="24" style="margin-right: 9; margin-bottom: 2px;">
        Add a New Section
      </button>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-md-12">
      <div class="card mb-4" id="crd">
        <div class="row">
          <div class="col-md-12">
            <img src="{{ asset('img/eye.png') }}" alt="" width="30" height="30" style="margin-right: 30px; margin-top: 10px;float: right;">
          </div>
        </div>
        <div class="row pt-3 pl-5">
          <a href="#" class="text-decoration-none ">
            <span style="color: black;font-size:28px;font-weight: bold;">::</span>
            <span style="color: black;font-size:18px;font-weight: bold;">Coverage</span>
          </a>
        </div>
        <div class="row">
          <div class="col-md-8">
            <a href="#" class="text-decoration-none ">
              <img src="{{ asset('img/you.webp') }}" alt="" width="40" height="40" style="margin-left: 30px; margin-top: 60px;margin-bottom: 60px;">
              <p class="ml-4 p-0 mt-0" style="color: black;">YouTube.co...</p>
            </a>
          </div>
          <div class="col-md-1 text-center">
            <h6>TOTAL</h6>
            <div class="card text-lg-center" id="crrds">
              <h1 class="mt-1">1</h1>
            </div>
            <h6>PIECE</h6>
          </div>
          <div class="col-md-1 text-center">
            <h6>LAYOUT</h6>
            <div class="card text-lg-center" id="crrds">
              <img src="{{ asset('img/layout (2).png') }}" alt="" width="40px" height="40px" style="margin-left: 15px; margin-top: 10px;margin-bottom: 0px;">
            </div>
            <h6>FULL</h6>
          </div>
          <div class="col-md-1 mt-4 text-center">
            <a href="" class="text-decoration-none">
              <div style="width:80px;height: 80px;background: white;border-radius: 50%;box-shadow: 0 1px 9px 0 #888888;">
                <i class="fa-sharp fa-solid fa-arrow-right pt-4" style="color: lightseagreen;font-size: 30px;"></i>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
<div class="modal" id="addNewSlide">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add slides</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="form-group">
          <b>Choose which section to add your slides to</b><br>
          <small>You can move them to another section later if you need to.</small>
          <select class="form-control" id="addSlidParent">
            @if(!empty($sections))
            @foreach($sections as $section)
            <option value="{{ $section->id }}">{{ $section->name }}</option>
            @endforeach
            @endif
          </select>
        </div>
        <div class="form-group">
          <p>Add your own brand images, graphics and analysis to your book. Each file or page will be added as an individual slide. You can move and reorder them after upload.</p>
          <p>Supported file types: JPG, PNG, GIF, PDF</p>
        </div>


        <form method="post" action="{{route('book.addNewSlideFiles')}}" enctype="multipart/form-data" class="dropzone" id="dropzone">
          @csrf
          <input type="text" name="parrentId" id="parrentId" value="{{ $sections[0]->id ?? ''}}">
        </form>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success" data-dismiss="modal" id="add_files_btn">Add Section</button>
        </div>
      </div>

      <!-- Modal footer -->


    </div>
  </div>
</div>
<div class="modal" id="addNewSection">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add a Section</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="/action_page.php">

          <div class="form-group">
            <p>Sections can be used to<b> organise your coverage</b>. Each section will have its <b> own page </b> (and URL) in the book and you can move coverage between sections at any time.</p>
          </div>

          <div class="form-group">
            <label class="font-weight-bold" for="email">Section name<br> <small>e.g. 'Autumn coverage' or 'On the socials'</small></label>

            <input type="text" class="form-control">
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success">Add Section</button>
          </div>
        </form>
      </div>

      <!-- Modal footer -->


    </div>
  </div>
</div>
<!-- modal banner logo -->
<div class="container">
  <div class="modal fade" id="modal1">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="head" id="text">Edit Book Logo</h>
            <button type="buttom" class="close" data-dismiss="modal">
              &times;
            </button>

        </div>
        <div class="modal-body" id="form">
          <form action="{{ route('book.storeBookLogo') }}" method="POST" class="form" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-md-3">
                <label class="cabinet center-block">
                  <figure>
                    <img src="" class="gambar img-responsive img-thumbnail" id="item-img-output" />
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
              <div class="col-md-8">
                <p class="text-sm text-gray-600">
                  This logo appears in the top banner of your shared book. Agencies might put their own logo here. To see how it looks in place,
                  <a href="#" class="link link-success underline" data-component="link">preview your book</a>.
                </p>
                <input type="hidden" name="bookId" value="{{ $bookId ?? ''}}">
                @if(!empty($book->banner_logo))
                <a href="{{ route('book.deleteBookHeaderLogo', $book->id) }}" class="btn btn-outline-danger" onclick="return confirm('Are you sure?')">Remove</a>
                @endif
              </div>
            </div>
            <div class="text-right">
              <button class="btn mt-4 mb-3" type="submit" data-component="button-element" id="bttnn">
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
<!-- modal banner logo end-->

<!-- modal color picker -->
<div class="container">
  <div class="modal fade" id="modal2">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="head" id="text">Edit accent colour</h>
            <button type="buttom" class="close" data-dismiss="modal">
              &times;
            </button>

        </div>
        <div class="modal-body" id="form">
          <form action="{{ route('book.setHeaderIconColor') }}" method="POST" class="form">
            @csrf
            <p id="text">The accent colour is used on links, buttons, certain text and icons to add a customised brand flavour to the books you share.</p>
            <div>
              <input type="color" id="head" name="bg_color" value="#e66465" class="form-control">
              <input type="hidden" name="bookId" value="{{ $bookId ?? ''}}">
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
</div>
<!-- modal coor picker end-->


<!-- modal edit book -->
<div class="container">
  <div class="modal fade" id="modal3">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="head" id="text">Edit Book</h>
            <button type="buttom" class="close" data-dismiss="modal">
              &times;
            </button>

        </div>
        <div class="modal-body" id="form">
          <form action="" class="form">
            <label for="" class="font-weight-bold">Name</label>
            <p class="text-secondary text-left ml-0">This is not your front cover title. It's for internal use only.</p>

            <input type="text" value="New Book 2023" class="form-control">

            <button class="btn mt-4 mb-3" type="submit" name="" value="" data-component="button-element" id="bttnn">
              Update Book
            </button>
            <a type="button" class="btn  mt-2 ml-3" data-dismiss="modal" id="clsebtn">Cancel</a>
          </form>
        </div>


      </div>

    </div>

  </div>
</div>
<!-- modal edit book end-->



@endsection
@section('scripts')
<script>
  $("#addSlidParent").on("change", function() {
    $('body').find('#parrentId').val($(this).val());
  });
</script>
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
  // Start upload preview image
  if ('<?php echo $book->banner_logo ?? '' ?>') {
    var img = '<?php echo $book->banner_logo ?? '' ?>';
    var path = '<?php echo asset('img/') ?>';
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