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


    <!-- <?php if(!empty(!session('wrong_seller_email'))): ?>
        <div class="alert alert-primary">Email Address not registered.</div>
    <?php endif; ?> -->
    <!-- <?php if( !empty(session('wrong_seller_email'))): ?>
        <div class="alert alert-danger">Enter your Email.</div>
    <?php endif; ?> -->
    <form action="<?php echo e(route('site.seller.resetpassword')); ?>" method="POST" class="row g-3 ">
        <?php echo csrf_field(); ?>
        <div class="col-12">
            <label for="yourPassword" class="form-label">New Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
            <div class="invalid-feedback">Please enter your password!</div>
        </div>

        <div class="col-12">
            <label for="yourPassword" class="form-label">ReEnter Password</label>
            <input type="password" class="form-control" name="password_confirmation" id="exampleInputPassword2" placeholder="Password">
            <div class="invalid-feedback">Please ReEnter your password!</div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
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

<?php echo $__env->make('HomePage.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ashokpoudel/Documents/Web Devlopment/Laravel/Shipmate with Git/shipmate/resources/views/LoginSignUp/setpassword.blade.php ENDPATH**/ ?>