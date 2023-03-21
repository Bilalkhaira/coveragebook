@extends('layouts.book_master')

@section('content')
<section class="body">
  <div class="container-fluid" style="background: #fafafa">

    <div class="row" id="rws">
      <div class="col-md-9 mt-5 pb-5">
        <div>
          <a href="Edit.html" class="text-success text-decoration-none hover:text-green-darker">New Book 2023</a>
          <span class="opacity-50">/</span>
          <span class="opacity-60">Book Overview</span>
        </div>
        <span class="new mb-3">New Book 2023</span>
        <a href="" class="button group button-icon flex-none" type="button" data-toggle="modal" data-target="#modal3">
          <img src="{{ asset('img/edit.png') }}" alt="" width="44" height="44" style="margin-left: 12; margin-bottom: 18px;">
        </a>
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
        <div class="card p-2" id="shadow" type="button" data-toggle="modal" data-target="#modal1">
          <div class="row">
            <div class="col-md-8">
              <h6 class="ml-2 mt-1 font-weight-bold">Banner Logo</h6>
              <h6 class="clr ml-2">Add Your Logo</h5>
            </div>
            <div class="col-md-4 text-right">
              <a href="" class="btn mt-1" type="button" data-toggle="modal" data-target="#modal1" id="achrcrd">
                <img src="{{ asset('img/book.png') }}" alt="" width="30" height="30" class="mt-0">
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card p-2" id="shadow" type="button" data-toggle="modal" data-target="#modal2">
          <div class="row">
            <div class="col-md-8">
              <h6 class="ml-2 mt-1 font-weight-bold">Accent color</h6>
              <h6 class="text-success ml-2">#abb2ba</h6>
            </div>
            <div class="col-md-4 text-right">
              <a href="" class="btn mt-1" type="button" data-toggle="modal" data-target="#modal2" id="achrcrd">
                <img src="{{ asset('img/circle.png') }}" alt="" width="30" height="30" class="mt-1">
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3"type="button">
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
      </div>
    </div>

    <div class="row mb-2">
      <div class="col-md-4">

        <a href="{{ route('book.fount_cover') }}" class="text-decoration-none">
          <div class="card" id="crd">
            <img src="{{ asset('img/_20230131194939.jpg') }}" alt="" width="100%" height="100%">
            <p style="color: black;margin-top: 6px;">Front Cover</p>
          </div>
        </a>

        <div class="dropdown float-right dropleft">
          <a href="" type="" class="text-success" data-toggle="dropdown" style="font-size: 28px;text-decoration: none;">
            <b>...</b>
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="Edit.html"><i class="fa-solid fa-eye-slash"></i>Hide</a>
          </div>
        </div>

      </div>
      <div class="col-md-4">

        <a href="{{ route('book.matrics_summary') }}" class="text-decoration-none">
          <div class="card p-2" id="crd">
            <div class="row">
              <div class="col-md-6">
                <div class="card mt-2 text-lg-center" id="crds">
                  <h1 class="p-4">1</h1>
                  <p>Price of Coverage</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card mt-2 text-lg-center" id="crds">
                  <h1 class="p-4">0</h1>
                  <p>Estimated Views</p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 p-4 mt-3">
                <div class="card text-lg-center" id="crrds">
                  <p class="p-4">+ 3 more matrics</p>
                </div>
              </div>
            </div>
            <a href="" class="text-decoration-none">
              <span style="color: black;">Matrics Summary</span>
              <span class="text-secondary font-weight-bold">(4 itoms)</span>
            </a>
          </div>
        </a>

        <div class="dropdown float-right dropleft">
          <a href="" type="" class="text-success" data-toggle="dropdown" style="font-size: 28px;text-decoration: none;">
            <b>...</b>
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="Edit.html"><i class="fa-solid fa-eye-slash"></i>Hide</a>
          </div>
        </div>

      </div>
      <div class="col-md-4">

        <a href="{{ route('book.highlights') }}" class="text-decoration-none">
          <div class="card text-center p-3" id="crd">
            <i class="fa fa-star" style="font-size: 40px;margin-top: 60px;color: #fec878"></i>
            <p class="mt-3" style="color: black;">Showcase your best bits by clicking the star <br> icons on each piece of coverage </p>
          </div>
          <span class="mt-3" style="color: black;">Highlights</span>
          <span class="text-secondary font-weight-bold">(0 itoms)</span>
        </a>

        <div class="dropdown float-right dropleft mt-0">
          <a href="" type="" class="text-success" data-toggle="dropdown" style="font-size: 28px;text-decoration: none;">
            <b class="mt-0">...</b>
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="Edit.html"><i class="fa-solid fa-eye-slash"></i>Hide</a>
          </div>
        </div>

      </div>

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
          <form action="" class="form">
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
                <a type="button" class="btn btn-outline-danger"> <i class="fa fa-trash"></i> Remove</a>
              </div>
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
          <form action="" class="form">
            <p id="text">The accent colour is used on links, buttons, certain text and icons to add a customised brand flavour to the books you share.</p>
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