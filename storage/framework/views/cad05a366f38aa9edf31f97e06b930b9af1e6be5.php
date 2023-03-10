<?php $__env->startSection('content'); ?>
<section class="bodyc">
    <div class="container-fluid">

        <div class="pagetitle">
            <h1>Users</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Admin</li>
                    <li class="breadcrumb-item active">All Users</li>
                </ol>
            </nav>
        </div>
        <section class="section profile">
            <div class="row">

                <div class="col-xl-12">

                    <div class="card">


                        <div class="card-body pt-3">
                            <a class="btn btn-primary float-right" href="<?php echo e(route('user.create')); ?>">Add User</a>
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($user->id); ?></td>
                                        <td><?php echo e($user->name); ?></td>
                                        <td><?php echo e($user->email); ?></td>
                                        <td><?php echo e($user->getRoleNames()->first()); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('user.edit', $user->id)); ?>"><i class="fa fa-edit"></i></a>
                                            <form class="user_delete" action="<?php echo e(route('user.delete', $user->id)); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button  type="submit"><i class="fa fa-trash" onclick="return confirm('Are you sure?')"></i></button>
                                            </form>

                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </div>
</section>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/zubairmohsin/code/sites/coveragebook/resources/views/pages/users/allusers.blade.php ENDPATH**/ ?>