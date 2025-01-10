<?php $__env->startSection('content'); ?>

        
     <!--  ************************* Page Title Starts Here ************************** -->
     <div class="page-nav no-margin row">
            <div class="container">
                <div class="row">
                    <h2 class="text-start">About Us</h2>
                    <ul>
                        <li> <a href="<?php echo e(route($data->link . 'homepage')); ?>"><i class="bi bi-house-door"></i> Home</a></li>
                        <li><i class="bi bi-chevron-double-right pe-2"></i> About Us</li>
                    </ul>
                </div>
            </div>
        </div>
        
        
    <!--####################### About US Starts Here ###################-->
    <div class="container-fluid big-padding about-cover">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <table class="table bg-white shadow-md">
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Product Name</th>
                            <th>Qty</th>
                            <th>Price</th>
                            <th>Amount</th>
                            <th>Action</th>
                        </tr>
                        <tr class="align-middle">
                            <td>1</td>
                            <td>
                                <img class="max-100" src="<?php echo e(asset('template-giftshop/assets/images/product/p3.jpg')); ?>" alt="">
                            </td>
                            <td>Personalised Birthday Easel</td>
                            <td>2</td>
                            <td>44</td>
                            <td>88</td>
                            <td>
                                <button class="btn btn-xs pt-2 btn-danger"><i class="bi bi-trash"></i></button>
                            </td>
                        </tr>
                        <tr class="align-middle">
                            <td>2</td>
                            <td>
                                <img class="max-100" src="<?php echo e(asset('template-giftshop/assets/images/product/p4.jpg')); ?>" alt="">
                            </td>
                            <td>Personalised Wedding Easel</td>
                            <td>1</td>
                            <td>64</td>
                            <td>64</td>
                            <td>
                                <button class="btn btn-xs pt-2 btn-danger"><i class="bi bi-trash"></i></button>
                            </td>
                        </tr>
                        
                    </table>
                    
                    <button class="btn btn-danger float-end fw-bolder px-4">Make Payment</button>
                </div>
            </div>
        </div>
    </div>
        
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('SellerWebsite.GiftShop.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ashokpoudel/Documents/Web Devlopment/Laravel/Shipmate with Git/shipmate/resources/views/SellerWebsite/GiftShop/cart.blade.php ENDPATH**/ ?>