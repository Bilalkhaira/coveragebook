<sidebar id="sidebar">
    <div class="sidebar mb-4">
        <ul>
            <li class="lii">
                <!-- Default dropleft button -->
                <div class="btn-group dropright">
                    <a href="#" type="" class="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="<?php echo e(asset('img/plus.png')); ?>" alt="" width="60" height="60"><br> Add
                    </a>

                    <div class="dropdown-menu sidebar_menu" id="dropdown">


                        <div class="rounded-top" id="cardwth">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createJobModel"> Add New Card</button>
                            <div class="modal fade" id="createJobModel" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create New Job</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST">
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <div class="pt-3 setting_main">

                        <div class="row mb-3">
                            <div class="col-md-12 col-lg-12">
                                <textarea class="summernote" name="exp" cols="30" rows="4"></textarea>
                                <input type="hidden" value="" name="parent_id">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
                            <!-- <div class="row">
                                <div class="col-md-1 pt-2">
                                    <img class="card-img-left example-card-img-responsive" src="<?php echo e(asset('img/sharicon.png')); ?>" alt="" width="30" height="30" />
                                </div>

                                <div class="col-md-11">
                                    <div class="card-body mr-0 pt-1">
                                        <h6 class="card-title">Add Coverage Links</h6>
                                        <p class="textp card-text">Paste in links to online articals, Instagram, Twitter, Facebook, Youtube Vedios etc...</p>
                                    </div>
                                </div>
                            </div> -->
                        </div>

                        <div class="" id="cardwth">
                            <div class="row">
                                <div class="col-md-1 pt-1">
                                    <img class="card-img-left example-card-img-responsive" src="<?php echo e(asset('img/sharicon.png')); ?>" alt="" width="30" height="30" />
                                </div>

                                <div class="col-md-11">
                                    <div class="card-body mt-0 mr-3 pt-2">
                                        <h6 class="card-title">Upload Coverage Files</h6>
                                        <p class="textp card-text">Uload Newspapers & Mamazines clippings, TV and Radeo, Files, ectc...</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="" id="cardwth">
                            <div class="row">
                                <div class="col-md-1 pt-1">
                                    <img class="card-img-left example-card-img-responsive" src="<?php echo e(asset('img/sharicon.png')); ?>" alt="" width="30" height="30" />
                                </div>

                                <div class="col-md-11">
                                    <div class="card-body mt-0 mr-3 pt-2">
                                        <h6 class="card-title">Add Custom Slides</h6>
                                        <p class="textp card-text">Add Your own additional Slides, Brand, Graphics and Analysis.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-bottom" id="cardwth">
                            <div class="row">
                                <div class="col-md-1 pt-1">
                                    <img class="card-img-left example-card-img-responsive" src="<?php echo e(asset('img/sharicon.png')); ?>" alt="" width="30" height="30" />
                                </div>

                                <div class="col-md-11">
                                    <div class="card-body mt-0 mr-3 pt-2">
                                        <h6 class="card-title">Add a Section</h6>
                                        <p class="textp card-text">Group your coverage into sections by Region, Date, Medea type or anthing else you need...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Split dropleft button end -->

            </li>
            <li>
                <a href="<?php echo e(route('book.index')); ?>">
                    <i class="fa-solid fa-book-open" style="font-size: 30px;"></i><br> Book <br> Overview</a>
            </li>
            <li>
                <a href="<?php echo e(route('book.fount_cover')); ?>" class="pt-4">
                    <i class="fa-solid fa-image" style="font-size: 30px;"></i><br> Front Cover
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('book.matrics_summary')); ?>">
                    <i class="fa-solid fa-chart-simple" style="color: white;font-size: 30px;"></i><br> Matrics summary
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('book.highlights')); ?>">
                    <img src="<?php echo e(asset('img/star.png')); ?>" alt="" width="50" height="50"><br> Highlights
                </a>
            </li>
            <li class="lii">
                <!-- Default dropleft button -->
                <div class="btn-group dropright">
                    <a href="#" type="" class="" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                        <i class="fa-solid fa-layer-group" style="font-size: 30px;"></i><br> Coverage
                    </a>

                    <div class="dropdown-menu sidebar_menu" id="dropdown">
                        <div class="cards">
                            <div class="" id="cardwth">
                                <div class="row">
                                    <div class="col-md-11">
                                        <div class="card-body mt-0 mr-3 pt-2">
                                            <h6 class="card-title">Add Custom Slides</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-1 pt-1">
                                        <img class="card-img-left example-card-img-responsive" src="<?php echo e(asset('img/sharicon.png')); ?>" alt="" width="30" height="30" />
                                    </div>
                                </div>
                            </div>

                            <div class="rounded-bottom" id="cardwth">
                                <div class="row">
                                    <div class="col-md-11">
                                        <div class="card-body mt-0 mr-3 pt-2">
                                            <h6 class="card-title">Add New Section</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-1 pt-1">
                                        <img class="card-img-left example-card-img-responsive" src="<?php echo e(asset('img/sharicon.png')); ?>" alt="" width="30" height="30" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Split dropleft button end -->

            </li>
            <li>
                <a href="<?php echo e(route('book.share')); ?>" class="pb-5">
                    <i class="fa-solid fa-arrow-up-from-bracket" style="color: aqua;font-size: 30px;"></i><br> Share Book
                </a>
            </li>
        </ul>
    </div>
</sidebar>


<div class="modal fade" id="createJobModel" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create New Job</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST">
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <div class="pt-3 setting_main">

                        <div class="row mb-3">
                            <div class="col-md-12 col-lg-12">
                                <textarea class="summernote" name="exp" cols="30" rows="4"></textarea>
                                <input type="hidden" value="" name="parent_id">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div><?php /**PATH /Users/zubairmohsin/code/sites/coveragebook/resources/views/layouts/partials/_books_sidebar.blade.php ENDPATH**/ ?>