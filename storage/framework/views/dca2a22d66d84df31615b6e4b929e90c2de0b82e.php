<!DOCTYPE html>
<html lang="en">
<?php echo $__env->make('admin.layouts.partials._head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
    <?php echo $__env->make('admin.layouts.partials._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- ===== sidebar-wrapper start ====== -->
    <?php echo $__env->make('admin.layouts.partials._sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- ====== sidebar-wrapper end ====== -->

    <main id="main" class="main">
        <!-- ====== page-content-wrapper start ====== -->
        <?php echo $__env->yieldContent('content'); ?>
    </main>
    <!-- End #main -->

    <!-- ====== footer ====== -->
    <?php echo $__env->make('admin.layouts.partials._footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- ====== script ====== -->
    <?php echo $__env->make('admin.layouts.partials._scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html><?php /**PATH /Users/zubairmohsin/code/sites/coveragebook/resources/views/admin/layouts/master.blade.php ENDPATH**/ ?>