<?php $__env->startSection('content'); ?>

<section class="bodyc">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-9 mb-0">
        <p class="new ml-5 font-weight-lighter" style="margin-top: 60px;">All Books</p>
      </div>

      <div class="col-md-3 mt-5">
        <div class="container">
          <button type="button" class="btn mt-5 ml-5 p-1" id="main" data-toggle="modal" data-target="#modal1">
            <i class="fa-solid fa-book"></i>
            Create new Book
          </button>

          <div class="modal fade" id="modal1">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="head">Create a new Book</h4>
                  <button type="buttom" class="close" data-dismiss="modal">
                    &times;
                  </button>
                </div>
                <div class="modal-body" id="form">
                  <form action="" class="form text-center">
                    <label for="" class="label">Name your book</label><br>
                    <input type="text" class="form-control">

                    <label for="" class="label">Collections</label><br>
                    <select name="" id="" class="form-control">
                      <option value="No Collection">No Collection</option>
                      <option value="Collection1">Collection1</option>
                      <option value="Collection2">Collection2</option>
                    </select>

                    <button class="btn mt-4 mb-3" type="submit" name="" value="yes" data-component="button-element" id="bttn">
                      Create book &amp; add coverage
                    </button><br>
                    <a href="" class="anchor">
                      Go to book and add coverage later
                    </a>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr style="width:1080px; height: 0.4 px;background: rgb(193, 187, 187);margin-top: 25px; margin-left: 40px;">
    </div>

    <div class="row mt-4">
      <div class="col-md-9 text-left">
        <form class="example ml-2" action="/action_page.php" style="margin:auto;max-width:390px;">
          <input type="text" class="bg-white border-outline-secondary focus:border-succees" placeholder="Search books by title..." name="search2">
          <button type="submit"><i class="fa fa-search text-dark font-weight-lighter"></i></button>
        </form>
      </div>
      <div class="col-md-3">
        <select name="" class="borderb bg-white p-2 rounded" style="height: 38px;">
          <option value="By Name (A-Z)">By Name (A-Z)</option>
          <option value="By Name (Z-A)">By Name (Z-A)</option>
          <option value="Created Recently Created">Created Recently Created</option>
          <option value="Created Recently Updated">Created Recently Updated</option>
        </select>
      </div>
    </div>

    <div class="row pt-4">
      <div class="col-md-4">
        <div class="row">

          <a href="">
            <div class="card mt-2 ml-4" style="height: 260px;width: 330px;border-radius: 14px;">
              <img src="<?php echo e(asset('img/_20230131194939.jpg')); ?>" alt="" style="height: 100%;width: 100%; border-radius: 14px;">
            </div>
          </a>
          <div class="col-md-10">
            <a href="" style="text-decoration: none;">
              <h5 id="text" class="ml-4 mt-3">New Book 2023</h5>
              <div class="text-xs text-secondary opacity-60 ml-4">
                Created: Jan 31, 2023 ・ 1 item
              </div>
            </a>
          </div>
          <div class="col-md-1 mt-0">
            <div class="dropdown">
              <a href="" type="" class="text-success" data-toggle="dropdown" style="font-size: 28px;text-decoration: none;">
                <b>...</b>
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="Edit.html">Edit</a>
                <a class="dropdown-item" href="#">Share</a>
                <a class="dropdown-item" href="#">Copy</a>
                <a class="dropdown-item" href="#">Archive</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<div class="container">
  <div class="modal fade" id="modal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="head" id="text">Create a new Collection</h>
            <button type="buttom" class="close" data-dismiss="modal">
              &times;
            </button>

        </div>
        <div class="modal-body" id="form">
          <form action="" class="form">
            <h6 id="text">Organise your books into clients or brands. Or whatever kind of collection that makes sense to you…</h6><br>
            <label for="" class="label" id="text">Name</label><br>
            <input type="text" class="form-control">

            <button class="btn mt-4 mb-3" type="submit" name="" value="" data-component="button-element" id="bttnn">
              Create Collection
            </button>
            <a type="button" class="btn  mt-2 ml-3" data-dismiss="modal" id="clsebtn">Close</a>
          </form>
        </div>


      </div>

    </div>

  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/zubairmohsin/code/sites/coveragebook/resources/views/admin/home.blade.php ENDPATH**/ ?>