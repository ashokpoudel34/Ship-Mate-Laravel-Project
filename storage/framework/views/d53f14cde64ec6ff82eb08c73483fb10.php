<?php $__env->startSection('content'); ?>




<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row gy-4 d-flex justify-content-between">
        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

<div class="card mb-3">

<div class="card-body">
<?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <!-- <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($e); ?> <Br>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> -->
                <?php echo e($errors->first()); ?>

            </div>
        <?php endif; ?>

        

  <div class="pt-1 pb-0">
    <h5 class="card-title text-center pb-0 fs-5">Create an Account</h5>
    <p class="text-center small">Enter your personal details to create account</p>
  </div>

  <form class="row g-3 " action="<?php echo e(route('site.seller.seller_signup')); ?>" id="registration-form" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="col-12">
      <label for="yourName" class="form-label">Your Name</label>
      <input type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" placeholder="Enter name">
      <div class="invalid-feedback">Please, enter your name!</div>
    </div>

    <div class="col-12">
      <label for="yourEmail" class="form-label">Your Email</label>
      <input type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" placeholder="Enter email">
      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
    </div>

    <div class="col-12">
      <label for="yourUsername" class="form-label">Username</label>
      <div class="input-group has-validation">
        <span class="input-group-text" id="inputGroupPrepend">@</span>
        <input type="text" class="form-control" name="link" value="<?php echo e(old('link')); ?>" placeholder="Enter Username">
        <div class="invalid-feedback">Please choose a username.</div>
      </div>
    </div>

    <div class="col-12">
      <label for="yourPassword" class="form-label">Password</label>
      <input type="password" class="form-control" name="password" placeholder="Password">
      <div class="invalid-feedback">Please enter your password!</div>
    </div>

    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
        <div class="invalid-feedback">You must agree before submitting.</div>
      </div>
    </div>
    <div class="col-12">
      <button class="btn btn-primary w-100" type="submit">Create Account</button>
    </div>
    <div class="col-12">
      <p class="small mb-0">Already have an account? <a href="<?php echo e(route('site.seller.seller_login')); ?>">Log in</a></p>
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

<?php echo $__env->make('HomePage.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ashokpoudel/Documents/shipmate/resources/views/LoginSignUp/seller_signup.blade.php ENDPATH**/ ?>