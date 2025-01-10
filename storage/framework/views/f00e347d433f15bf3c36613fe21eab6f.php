<?php $__env->startSection('content'); ?>

<div class="pagetitle">
  <h1>Orders</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active">All Orders</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('seller.seller_portal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ashokpoudel/Documents/shipmate/resources/views/seller/orders/portal_order.blade.php ENDPATH**/ ?>