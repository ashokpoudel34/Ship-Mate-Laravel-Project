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

<?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($e); ?> <Br>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>

        <?php if($alert = Session::get('alert-success')): ?>
	<div class="alert alert-success"><?php echo e($alert); ?></div>
    <?php endif; ?>

<h2>Product Information</h2>
    <form action="<?php echo e(route('site.seller.allproducts')); ?>" method="POST" enctype="multipart/form-data">
      <?php echo csrf_field(); ?>
        <label for="product_name">Product Name *</label><br>
        <input type="text" id="product_name" name="product_name" required><br><br>

        <label for="product_category">Product Category *</label><br>
        <input type="text" id="product_category" name="product_category" required><br><br>

        <label for="price">Price *</label><br>
        ₹ <input type="number" id="price" name="price" required><br><br>

        <label for="discounted_price">Discounted Price</label><br>
        ₹ <input type="number" id="discounted_price" name="discounted_price"><br><br>

        <label for="product_unit">Product Unit *</label><br>
        <input type="number" id="product_unit" name="product_unit" required>
        <select name="unit_type">
            <option value="piece">per piece</option>
            <option value="kg">per kg</option>
            <option value="liter">per liter</option>
            <!-- Add other unit options as needed -->
        </select><br><br>

        <label for="product_description">Product Description</label><br>
        <textarea id="product_description" name="product_description" rows="4" cols="50"></textarea><br><br>

        <label for="product_media">Product Media *</label><br>
            <a href="#" class="btn btn-primary btn-sm" title="Upload Product Image"><input type="file" name="product_image"><i class="bi bi-upload"></i></a><br><br>
        <input type="submit" value="Submit">
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('seller.seller_portal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ashokpoudel/Documents/shipmate/resources/views/seller/products/portal_add_products.blade.php ENDPATH**/ ?>