<?php $__env->startSection('content'); ?>
<section class="body">
        <div class="container-fluid" style="background: #fafafa">
            <div class="row" id="rws">
                <div class="col-md-9 mt-5 pb-5">
                    <div>
                        <a href="" class="text-success hover:text-green-darker">New Book 2023</a>
                        <span class="opacity-50">/</span>
                        <span class="opacity-60">Front Matter</span>
                    </div>
                    <span class="new">Highlights</span>
                    <span class="text-secondary">0 itoms</span>
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
            <div class="row mt-2">
                <div class="col-md-3">
                    <div class="card p-1" id="shadow">
                        <div class="row">
                            <div class="col-md-8">
                                <h6 class="ml-2 mt-1">Show/hide Highlights</h6>
                                <h5 class="clr ml-2">Visible</h5>
                            </div>
                            <div class="col-md-4">
                                <a href="" class="btn mt-2" style="background: lavender;">
                                    <img src="<?php echo e(asset('img/eye.png')); ?>" alt="" width="30" height="30" class="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-3 mt-5">
                <div class="col-md-12">
                    <div class="text-center" style="width:100%;height: 250px;padding-top: 100px;border-radius: 16px; border: 2px dashed gray;">
                        <h3>Showcase your best bits of coverage as highlights</h3>
                        <p class="text-secondary">Click the found on each piece of coverage in your book</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.book_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/zubairmohsin/code/sites/coveragebook/resources/views/pages/book/highlights.blade.php ENDPATH**/ ?>