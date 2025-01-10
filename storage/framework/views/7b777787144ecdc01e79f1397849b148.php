<?php $__env->startSection('content'); ?>

<div class="pagetitle">
  <h1>Products</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active">All Products</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<?php if($alert = Session::get('alert-success')): ?>
	<div class="alert alert-success"><?php echo e($alert); ?></div>
    <?php endif; ?>

<div class="container">
        <h1 class="mt-4">Product List</h1>
        <ul class="list-group mt-4">
        <?php $__currentLoopData = $product_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="list-group-item">
                <div class="row">
                    <div class="col-md-3">
                        <img src="storage/<?php echo e($data->path); ?>" alt="<?php echo e($data->product_name); ?>" class="img-fluid rounded">
                    </div>
                    <div class="col-md-6">
                        <h2><?php echo e($data->product_name); ?></h2>
                        <p><?php echo e($data->product_description); ?></p>
                        <p>Price: ₹<?php echo e($data->price); ?></p>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-info me-2">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>

        <a  class="btn btn-primary mt-4" href="<?php echo e(route('site.seller.newproducts')); ?>">Add New Product</a>
        <!-- <button ahref = "<?php echo e(route('site.seller.newproducts')); ?>" class="btn btn-primary mt-4">Add New Product</button> -->
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('seller.seller_portal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ashokpoudel/Documents/Web Devlopment/Laravel/Shipmate Git/project/resources/views/seller/products/portal_products.blade.php ENDPATH**/ ?>