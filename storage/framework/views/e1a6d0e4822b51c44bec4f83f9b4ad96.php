<?php $__env->startSection('content'); ?>

<div class="pagetitle">
  <h1>Appreance</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo e(url('/welcome')); ?>">Home</a></li>
      <li class="breadcrumb-item"><a href="<?php echo e(url('/menu')); ?>">Menu</a></li>
      <li class="breadcrumb-item active">Edit</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<div class="container mt-5">
  <h2>Edit Data</h2>
  <form method="POST" action="<?php echo e(url('/menu/edit/'.$WebsiteTitles->id)); ?>">
    <?php echo csrf_field(); ?> <!-- Include the CSRF token -->
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" id="title" name="title" value="<?php echo e($WebsiteTitles->title); ?>" required>
    </div>
    <div class="mb-3">
      <label for="heading" class="form-label">Heading</label>
      <input type="text" class="form-control" id="heading" name="heading" value="<?php echo e($WebsiteTitles->heading); ?>" required>
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control" id="description" name="description" rows="4" required><?php echo e($WebsiteTitles->description); ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('seller.seller_portal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\shipmate\resources\views/seller/appreance/portal_menu_edit.blade.php ENDPATH**/ ?>