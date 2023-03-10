<!DOCTYPE html>
<html lang="en">

<head>
    <title>CoverageBook</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="<?php echo e(asset('css/custom_style.css')); ?>" />
    <link rel="icon" type="image/png" href="<?php echo e(asset('img/book.png')); ?>" />
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 login_form">
                <div class="col-md-12">
                    <img src="<?php echo e(asset('img/book.png')); ?>" width="40" height="40">
                </div>
                <div class="col-md-12">

                    <form method="POST" action="<?php echo e(route('reset.password')); ?>">
                        <?php echo csrf_field(); ?>
                        <h1 class="font-weight-bold">Change your password</h1>

                        <div class="form-group">
                            <label for="email" class="font-weight-bold">Current password:</label>
                            <input id="password" type="password" class="form-control <?php $__errorArgs = ['current_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="current_password" value="<?php echo e(old('current_password')); ?>" required autocomplete="email" autofocus>

                            <?php $__errorArgs = ['current_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                            <label for="pwd" class="font-weight-bold">New Password:</label><br>
                            8 characters minimum

                            <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password">

                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group">
                            <label for="pwd" class="font-weight-bold">Confirm new password:</label><br>
                            8 characters minimum

                            <input id="password" type="password" class="form-control <?php $__errorArgs = ['confirmpassword'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="confirmpassword" required autocomplete="current-confirmpassword">

                            <?php $__errorArgs = ['confirm_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group update_pswrd_btns">
                            <button type="submit" class="btn btn-success">Update Password</button>

                            <a href="<?php echo e(route('dashboard')); ?>">Cancel</a>
                        </div>
                    </form>
                </div>

            </div>

            <div class="col-md-4 img_col">

                <div class="col-md-12 d-flex justify-content-center">
                    <img src="<?php echo e(asset('img/signin.png')); ?>" width="150px" height="150px" alt="">
                </div>

                <div class="col-md-12 ">
                    <blockquote class="font-serif text-xl text-center text-green-darker leading-snug">
                        <p>“
                            This is by far the best new app I've used this year. It's like the Canva for PR reports.
                            It took about 60 seconds to build the report and not only does it look fantastic, but the data insights are really valuable.
                            ”</p>
                    </blockquote>
                    <p class="text-green-darker"><cite class=" not-italic"><strong>Cassie Anderson</strong>, Account Manager, MD Consulting</cite></p>
                </div>

                <div class="col-md-12">
                    <img width="100%" src="<?php echo e(asset('img/signin1.png')); ?>" alt="">
                </div>

            </div>

        </div>
    </div>

</body>

</html><?php /**PATH /Users/zubairmohsin/code/sites/coveragebook/resources/views/auth/update_password.blade.php ENDPATH**/ ?>