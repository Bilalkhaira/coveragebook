<?php $__env->startSection('content'); ?>
<section class="body">
        <div class="container-fluid" style="background: #fafafa">
            <div class="row" id="rws">
                <div class="col-md-9 mt-5">
                    <div>
                        <a href="" class="text-success hover:text-green-darker">New Book 2023</a>
                    </div>
                    <span class="new">Share your book</span>
                </div>
                <div class="col-md-3">
                    <a href="<?php echo e(route('book.preview')); ?>" target="_blank">
                        <button type="button" class="btn mt-5 pr-5" id="prviw" data-toggle="modal" data-target="#">
                            <img src="<?php echo e(asset('img/eye.png')); ?>" alt="" width="24" height="24" style="margin-right: 9; margin-bottom: 3px;">
                        Preview Book 
                    </button>
                    </a>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-4">
                    <div class="card border-right" id="sharecrd">

                        <h3>Share Online</h3>

                        <img src="<?php echo e(asset('img/shareable.svg')); ?>" alt="" width="170" height="122" style="margin-left: 90px; margin-top: 20px; margin-bottom: 20px;">

                        <p class="mb-6">With a paid plan, you can create your own customised sharing link. <br> For example, "mybusiness.coveragebook.com".</p>

                        <p class="mb-6">Copy this link and send it to anyone you want to share this book with.</p>
                        <div>
                            <input class="btn border-secondary outline-secondary rounded w-75 p-2" type="text " name="share_url " id="share_url " value="https://share.coveragebook.com/b/a51a63d9cdde10c2 " data-target="clipboard.source " data-action="click->clipboard#copy">

                            <button class="btn btn-info mt-3 mb-3 form-control" data-target="clipboard.flash" data-action="click->clipboard#copy" data-component="button-element" type="submit">
                                <span class="button-label">
                                     Copy
                                      <span class="hidden lg:inline-block lg:px-[0.3em]">shareable</span>
                                      link
                                      </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-right" id="sharecrd">
                        <h3>Create A PDF</h3>

                        <img src="<?php echo e(asset('img/pdf-printer.svg')); ?>" alt="" width="170" height="122" style="margin-left: 90px; margin-top: 20px; margin-bottom: 20px;">

                        <p class="mb-6">Export your book as a PDF file, ready to send digitally or print.</p>

                        <button class="btn btn-info mt-3 mb-3" data-target="clipboard.flash" data-action="click->clipboard#copy" data-component="button-element" type="submit">
                            <span class="button-label">
                                 Start
                                  <span class="hidden lg:inline-block lg:px-[0.3em]">PDF</span>
                                  Export
                                  </span>
                        </button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" id="sharecrd">

                        <h3>Download a CVS</h3>

                        <img src="<?php echo e(asset('img/csv-spreadsheet.svg')); ?>" alt="" width="170" height="122" style="margin-left: 90px; margin-top: 20px;margin-bottom: 20px;">

                        <p class="mb-6">Export all coverage and metrics to an Excel/CSV file.</p>
                        <p class="mb-6">
                            <strong>Export all coverage and metrics to an Excel/CSV file.</strong>
                        </p>

                        <button class="btn btn-info mt-3 mb-3" data-target="clipboard.flash" data-action="click->clipboard#copy" data-component="button-element" type="submit">
                            <span class="button-label">
                                 Upgrade
                                  <span class="hidden lg:inline-block lg:px-[0.3em]">
                                  Now
                                  </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>





<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.book_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/zubairmohsin/code/sites/coveragebook/resources/views/pages/book/share_book.blade.php ENDPATH**/ ?>