


    <link rel="stylesheet" href="<?php echo e(asset('client_css/UserLogincss/userLogin.css')); ?>">

    <?php $__env->startSection('content'); ?>
        <div class="form-div right-side">

            <div>
                <?php if( ! empty( session('otp_verified'))): ?>
                    <div class="alert alert-success">You are now registered as Seller. Please Login.</div>
                <?php endif; ?>
            </div>



            <h1 class="login text-4xl">Login <i class="bi bi-person-circle"></i></h1>

            <form action="<?php echo e(route('site.seller.seller_login')); ?>" class="effect2" method="POST" enctype="multipart/form-data">

                <?php echo csrf_field(); ?>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email address/Phone</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email/Phone">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                </div>
                
                <?php if($error = $errors->first('password')): ?>
             <div class="alert alert-danger"><?php echo e($error); ?></div>
                <?php endif; ?>

                <button type="submit" class="btn btn-primary">Submit</button>
                <p class="noAcc">Don't have an account?&nbsp;&nbsp;<a href="<?php echo e(route('site.seller.seller_signup')); ?>"><strong>  Signup <i class="bi bi-pencil-square"></i></strong></a></p>
            </form>
        </div>
    <?php $__env->stopSection(); ?>


<?php echo $__env->make('seller.seller_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ashok/Documents/6th sem/ASMP/ship-mate (1)/resources/views/seller/seller_login.blade.php ENDPATH**/ ?>