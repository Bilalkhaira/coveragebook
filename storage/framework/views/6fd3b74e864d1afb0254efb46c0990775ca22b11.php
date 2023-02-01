<?php $__env->startSection('content'); ?>

<div class="pagetitle">
    <h1>Users Role</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Admin</li>
            <li class="breadcrumb-item active">Edit User</li>
        </ol>
    </nav>
</div>

<section class="section">
    <div class="row">

        <div class="col-xl-12">
            <div class="card">
                <div class="card-body pt-3">

                    <div class="tab-content pt-2">
                        <form action="<?php echo e(route('user.update', $user->id )); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="pt-3">

                                <div class="row mb-3">
                                    <label class="col-md-4 col-lg-3 col-form-label">Name</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input class="form-control" type="text" name="name" value="<?php echo e($user->name ?? ''); ?>" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-4 col-lg-3 col-form-label">Email</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="email" class="form-control" name="email" value="<?php echo e($user->email ?? ''); ?>" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-4 col-lg-3 col-form-label">User Role</label>
                                    <div class="col-md-8 col-lg-9">
                                       
                                        <input type="text" class="form-control" value="<?php echo e($role->name); ?>" readonly>

                                    </div>
                                </div>

                                <div style="float: right;">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>

                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/zubairmohsin/code/sites/coveragebook/resources/views/admin/pages/users/edituser.blade.php ENDPATH**/ ?>