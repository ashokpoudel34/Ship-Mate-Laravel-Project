<?php $__env->startSection('content'); ?>

        
     <!--  ************************* Page Title Starts Here ************************** -->
     <div class="page-nav no-margin row">
            <div class="container">
                <div class="row">
                    <h2 class="text-start">Login Page</h2>
                    <ul>
                        <li> <a href="<?php echo e(route($data->link . 'homepage')); ?>"><i class="bi bi-house-door"></i> Home</a></li>
                        <li><i class="bi bi-chevron-double-right pe-2"></i> User Login</li>
                    </ul>
                </div>
            </div>
        </div>
        
        
    <!--####################### About US Starts Here ###################-->
    <div class="container-fluid big-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-7 col-md-10 py-5 mx-auto">
                    <div class="login-card bg-white shadow-md p-5">
                <?php if( ! empty( session('seller_otp_verified'))): ?>
                    <div class="alert alert-success">Registration Successful. Please Login.</div>
                <?php endif; ?>

                <?php if( ! empty( session('reset_otp_verified'))): ?>
                    <div class="alert alert-success">Reset Successful. Please Login.</div>
                <?php endif; ?>

                <?php if($error = $errors->first('err')): ?>
                    <div class="alert alert-danger"><?php echo e($error); ?></div>
                <?php endif; ?>
                        <form class="row g-2 " action="<?php echo e(route($data->link . 'giftshop.login')); ?>" method="POST" enctype="multipart/form-data">
                             <?php echo csrf_field(); ?>
                        <h4 class="text-center mb-5">Enter your detail to Login</h4>
                        <div class="form-row row">
                            <div class="col-md-4 pt-2">
                                <label for="">Email Address</label>
                                <span class="fw-bolder float-end">:</span>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="email" placeholder="Enter Email Address" class="form-control">
                            </div>
                        </div>
                         <div class="form-row row">
                            <div class="col-md-4 pt-2">
                                <label for="">Password</label>
                                <span class="fw-bolder float-end">:</span>
                            </div>
                            <div class="col-md-8">
                                <input type="password" name="password" placeholder="Enter Password" class="form-control">
                            </div>
                        </div>
                        <div class="form-row row">
                            <div class="col-md-4 pt-2">
                              
                            </div>
                            <div class="col-md-8">
                               <button class="btn btn-danger">Click to Login</button>
                              <a href="<?php echo e(route($data->link . 'giftshop.reset')); ?>"><span class="float-end pt-2">forget Password ?</span></a> 
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
       
    
        
        
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('SellerWebsite.GiftShop.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ashokpoudel/Documents/Web Devlopment/Laravel/Shipmate with Git/shipmate/resources/views/SellerWebsite/GiftShop/login.blade.php ENDPATH**/ ?>