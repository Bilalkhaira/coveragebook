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
      <div class="col-md-3">
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
            <div class="col-md-4">
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
            <div class="col-md-4">
              <a href="" class="btn mt-1" type="button" data-toggle="modal" data-target="#modal2" id="achrcrd">
                <img src="{{ asset('img/circle.png') }}" alt="" width="30" height="30" class="mt-1">
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3" href="" type="button" data-toggle="modal" data-target="book matrics.html">
        <div class="card p-2" id="shadow">
          <div class="row">
            <div class="col-md-8">
              <h6 class="ml-2 mt-1 font-weight-bold">Matrics & Links</h6>
              <h6 class="clr ml-2">Rfresh/hide/show</h6>
            </div>
            <div class="col-md-4">
              <a href="book matrics.html" class="btn mt-1" id="achrcrd">
                <img src="{{ asset('img/level.png') }}" alt="" width="30" height="30" class="mt-1">
              </a>
            </div>
          </div>
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

        <a href="front cover.html" class="text-decoration-none">
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

        <a href="matric summary.html" class="text-decoration-none">
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

        <a href="highlights.html" class="text-decoration-none">
          <div class="card text-center p-3" id="crd">
            <img src="{{ asset('img/star (2).png') }}" alt="" width="90" height="90" style="margin-left: 140px; margin-top: 30px;">
            <p class="mt-3" style="color: black;">Showcase your best bits by clicking the star icons on each piece of coverage </p>
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
      <div class="col-md-3">
        <a href="#">
          <button type="button" class="btn mt-4 mb-3 pr-2 text-secondary" id="prviw" data-toggle="modal" data-target="#">
            <img src="{{ asset('img/p box.png') }}" alt="" width="24" height="24" style="margin-right: 9; margin-bottom: 2px;">
            Add a New Section
          </button>
        </a>
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
                <input type="file" accept="image/*" class="fsp-drop-pane__input form-control" style="width: 180px;height: 200px; border: 1px dashed gray; background: rgb(199, 198, 198);">
              </div>
              <div class="col-md-8">
                <p class="text-sm text-gray-600">
                  This logo appears in the top banner of your shared book. Agencies might put their own logo here. To see how it looks in place,
                  <a href="#" class="link link-success underline" data-component="link">preview your book</a>.
                </p>
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