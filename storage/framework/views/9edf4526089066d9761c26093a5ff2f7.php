

<link rel="stylesheet" href="<?php echo e(asset('client_css/UserLogincss/userLogin.css')); ?>">

<?php $__env->startSection('content'); ?>      

    <div class="form-div right-side">
        <div>
            <?php if( !empty(session('register_process_done'))): ?>
                <div class="aalert alert-primary">check your email or message for OTP.</div>
            <?php endif; ?>
        </div>

        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <span>Enter valid OTP.</span>
                
            </div>
        <?php endif; ?>

        <form action="<?php echo e(route('site.seller.seller_otp')); ?>" method="POST" class="effect2">

            <?php echo csrf_field(); ?>

            <div class="form-group">
                <label>OTP</label>
                <input type="text" class="form-control" name="userotp" placeholder="Enter OTP">
            </div>
 
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('seller.seller_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ashok/Documents/6th sem/ASMP/ship-mate (1)/resources/views/seller/otp_seller_signup.blade.php ENDPATH**/ ?>