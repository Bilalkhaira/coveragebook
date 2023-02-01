<?php $__env->startSection('content'); ?>

<div class="pagetitle">
    <h1>Users Role</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Admin</li>
            <li class="breadcrumb-item active">Edit User Role</li>
        </ol>
    </nav>
</div>

<section class="section">
    <div class="row">

        <div class="col-xl-12">
            <div class="card">
                <div class="card-body pt-3">

                    <div class="tab-content pt-2">
                        <form action="<?php echo e(route('roles.update', $role->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="pt-3">

                                <div class="row mb-3">
                                    <label class="col-md-4 col-lg-3 col-form-label">User Role</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input class="form-control" type="text" value="<?php echo e($role->name); ?>" readonly>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-4 col-lg-3 col-form-label">Permissions</label>
                                    <div class="col-md-8 col-lg-9">
                                        <select id="select_permissions" name="permissons[]" placeholder="Select Permissons..." autocomplete="off" class="form-control" multiple>
                                            <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permissions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($permissions['id']); ?>" <?php echo e(in_array($permissions->id, $rolePermissions) ? 'selected' : false); ?>><?php echo e($permissions['name']); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
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
<?php $__env->startSection('scripts'); ?>
<script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>
<script>
    new TomSelect('#select_permissions', {
        maxItems: 10,
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/zubairmohsin/code/sites/coveragebook/resources/views/admin/pages/users/rolesEdit.blade.php ENDPATH**/ ?>