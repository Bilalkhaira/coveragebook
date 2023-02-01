<!DOCTYPE html>
<html lang="en">
<?php echo $__env->make('layouts.partials._head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
    <div class="content-wrapper">
        <?php echo $__env->make('layouts.partials._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- ====== page-content-wrapper start ====== -->
        <?php echo $__env->yieldContent('content'); ?>

    </div>
    <!-- ====== footer ====== -->
    <?php echo $__env->make('layouts.partials._footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- ====== script ====== -->
    <?php echo $__env->make('layouts.partials._scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html><?php /**PATH /Users/zubairmohsin/code/sites/coveragebook/resources/views/layouts/master.blade.php ENDPATH**/ ?>