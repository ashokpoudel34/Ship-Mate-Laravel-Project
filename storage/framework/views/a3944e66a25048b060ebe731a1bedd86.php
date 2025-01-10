<?php $__env->startSection('content'); ?>

<div class="pagetitle">
  <h1>Appreance</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active">Themes</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<div class="row">

<div class="col-lg-4">

<div class="card">
    <div class="card-body">
        <h5 class="card-title">Restaurant</h5>
        <p>This is a sample Template for Hotel and Restaurant</p>
        <img src="<?php echo e(asset('template-res/assets/img/hero-bg.jpg')); ?>" alt="" height="200px" width="260px" ><br><br>

        <button>Apply</button>
    </div>
</div>

</div>

<div class="col-lg-4">

<div class="card">
    <div class="card-body">
        <h5 class="card-title">Electric Shop</h5>
        <p>This is a sample Template for Electronic Bussiness</p>
        <img src="<?php echo e(asset('assets/img/product-5.jpg')); ?>" alt="" height="200px" width="260px" ><br><br>

        <button>Apply</button>
    </div>
</div>

</div>

<div class="col-lg-4">

<div class="card">
    <div class="card-body">
        <h5 class="card-title">Ecommerce Store</h5>
        <p>This is a sample Template for E-Commerce Bussiness</p>
        <img src="<?php echo e(asset('assets/img/product-1.jpg')); ?>" alt="" height="200px" width="260px" ><br><br>

        <button>Apply</button>
    </div>
</div>

</div>

</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('seller.seller_portal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ashokpoudel/Documents/Web Devlopment/Laravel/Project/shipmate/resources/views/seller/appreance/portal_themes.blade.php ENDPATH**/ ?>