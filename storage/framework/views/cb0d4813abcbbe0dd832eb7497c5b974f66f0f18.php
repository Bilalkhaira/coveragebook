
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="<?php echo e(asset('css/admin/vendor/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/admin/vendor/bootstrap-icons.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/admin/vendor/boxicons.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/admin/vendor/quill.snow.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/admin/vendor/quill.bubble.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/admin/vendor/remixicon.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/admin/vendor/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/admin/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/admin/custom_style.css')); ?>" rel="stylesheet">

</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img class="login_img" src="<?php echo e(asset('img/logo-dark.png')); ?>" srcset="<?php echo e(asset('img/logo-dark@2x.png 2x')); ?>">
                  
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your username & password to login</p>
                  </div>

                  <form class="row g-3 needs-validation" novalidate method="POST" action="<?php echo e(route('login')); ?>">
                  <?php echo csrf_field(); ?>
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <!-- <input type="text" name="username" class="form-control" id="yourUsername" required> -->
                        <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
                        <div class="invalid-feedback">Please enter your username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <!-- <input type="password" name="password" class="form-control" id="yourPassword" required> -->
                      <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password">
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <!-- <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe"> -->
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Login</button>
                    </div>
                    <div class="col-12">
                      <!-- <p class="small mb-0">Don't have account? <a href="pages-register.html">Create an account</a></p> -->
                    </div>
                  </form>

                </div>
              </div>

             

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<script src="<?php echo e(asset('js/admin/vendor/apexcharts.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/admin/vendor/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/admin/vendor/chart.umd.js')); ?>"></script>
<script src="<?php echo e(asset('js/admin/vendor/echarts.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/admin/vendor/quill.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/admin/vendor/simple-datatables.js')); ?>"></script>
<script src="<?php echo e(asset('js/admin/vendor/tinymce.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/admin/vendor/php-email-form/validate.js')); ?>"></script>

<!-- Template Main JS File -->
<script src="<?php echo e(asset('js/admin/main.js')); ?>"></script>

</body>

</html><?php /**PATH /Users/zubairmohsin/code/sites/coveragebook/resources/views/auth/login.blade.php ENDPATH**/ ?>