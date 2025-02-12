<?php $__env->startSection('content'); ?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row gy-4 d-flex justify-content-between">
        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

<div class="card mb-3">
<div class="card-body">
                <?php if( ! empty( session('seller_otp_verified'))): ?>
                    <div class="alert alert-success">Registration Successful. Please Login.</div>
                <?php endif; ?>


                <?php if($error = $errors->first('err')): ?>
                    <div class="alert alert-danger"><?php echo e($error); ?></div>
                <?php endif; ?>

  <div class="pt-1 pb-1">
    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
    <p class="text-center small">Enter your username & password to login</p>
  </div>

  <form class="row g-2 " action="<?php echo e(route('site.seller.seller_login')); ?>" method="POST" enctype="multipart/form-data">
<?php echo csrf_field(); ?>
    <div class="col-12">
      <label for="yourUsername" class="form-label">Email</label>
      <div class="input-group has-validation">
        <span class="input-group-text" id="inputGroupPrepend">@</span>
        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
        <div class="invalid-feedback">Please enter your Email.</div>
      </div>
    </div>

    <div class="col-12">
      <label for="yourPassword" class="form-label">Password</label>
      <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
      <div class="invalid-feedback">Please enter your password!</div>
    </div>

    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
        <label class="form-check-label" for="rememberMe">Remember me</label>
      </div>
    </div>
    <div class="col-12">
      <button class="btn btn-primary w-100" type="submit">Login</button>
    </div>
    <div class="col-12">
      <p class="small mb-0">Don't have account? <a href="<?php echo e(route('site.seller.seller_signup')); ?>">Create an account</a></p>
    </div>
  </form>

</div>
</div>
        
</div>

        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
          <img src="<?php echo e(asset('landing_page/assets/img/hero-img.svg')); ?>" class="img-fluid mb-3 mb-lg-0" alt="">
        </div>

      </div>
    </div>
  </section><!-- End Hero Section -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('HomePage.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\shipmate\resources\views/LoginSignUp/seller_login.blade.php ENDPATH**/ ?>