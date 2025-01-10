<?php $__env->startSection('content'); ?>

<div class="pagetitle">
  <h1>Appreance</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo e(url('/welcome')); ?>">Home</a></li>
      <li class="breadcrumb-item active">Menu</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<div class="container">
  <!-- Header Section -->
  <?php if($alert = Session::get('alert-success')): ?>
	<div class="alert alert-success"><?php echo e($alert); ?></div>
    <?php endif; ?>
  <div class="row mt-4">
    <div class="col">
      <h2>Header</h2>
      <p>Add a new menu:</p>
      <button class="btn btn-primary" onclick="window.location.href='<?php echo e(url('/menu/add')); ?>'">Add Menu</button>
      <ul class="list-group mt-3">

<?php $__currentLoopData = $WebsiteTitles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $title): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          <?php echo e($title->title); ?>

          <div>
            <button class="btn btn-sm btn-info me-2" onclick="window.location.href='<?php echo e(url('/menu/edit/'.$title->id)); ?>'">Edit</button>
            <button class="btn btn-sm btn-danger" onclick="window.location.href='<?php echo e(url('/menu/destroy/'.$title->id)); ?>'">Delete</button>
          </div>
        </li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <!-- Add more menu items here -->
      </ul>
    </div>
  </div>

  <!-- Footer Section -->
  <div class="row mt-4">
    <div class="col">
      <h2>Footer</h2>
      <p>Add a new item:</p>
      <button class="btn btn-success">Add New Item</button>
      <ul class="list-group mt-3">
        <li class="list-group-item d-flex justify-content-between align-items-center">
          Added Item 1
          <div>
            <button class="btn btn-sm btn-info me-2">Edit</button>
            <button class="btn btn-sm btn-danger">Delete</button>
          </div>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          Added Item 2
          <div>
            <button class="btn btn-sm btn-info me-2">Edit</button>
            <button class="btn btn-sm btn-danger">Delete</button>
          </div>
        </li>
        <!-- Add more items here -->
      </ul>
    </div>
  </div>

  <!-- Add Page Section -->
  <div class="row mt-4">
    <div class="col">
      <h2>Add Page</h2>
      <p>Add a new page:</p>
      <button class="btn btn-info">Add New Page</button>
      <ul class="list-group mt-3">
        <li class="list-group-item d-flex justify-content-between align-items-center">
          Added Page 1
          <div>
            <button class="btn btn-sm btn-info me-2">Edit</button>
            <button class="btn btn-sm btn-danger">Delete</button>
          </div>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          Added Page 2
          <div>
            <button class="btn btn-sm btn-info me-2">Edit</button>
            <button class="btn btn-sm btn-danger">Delete</button>
          </div>
        </li>
        <!-- Add more pages here -->
      </ul>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('seller.seller_portal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ashokpoudel/Documents/Web Devlopment/Laravel/Shipmate Git/project/resources/views/seller/appreance/portal_menu.blade.php ENDPATH**/ ?>