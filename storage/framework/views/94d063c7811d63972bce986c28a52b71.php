<?php $__env->startSection('content'); ?>

<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
      <div class="row">
        <div class="col-lg-4">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Share Store Link</h5>
              <p>Customers can visit the following link and place their orders.</p>
              <p><a href="<?php echo e(url($data->link)); ?>">shipmate.ashok.live/<?php echo e($data->link); ?>

                <i class="ri ri-share-box-fill"></i>
                </a>
              </p>
              <p class="card-text">Share Via:
              <a href="" class="card-link">
                <i class="bi bi-facebook" style="font-size: 30px;" data-bs-toggle="tooltip" data-bs-placement="top" title="Share Via Facebook"></i>
              </a>
              <a href="">
                <i class="bi bi-whatsapp" style="font-size: 30px;" data-bs-toggle="tooltip" data-bs-placement="top" title="Share Via WhatsApp"></i>
              </a>
              <a href="">
                <i class="bi bi-instagram" style="font-size: 30px;" data-bs-toggle="tooltip" data-bs-placement="top" title="Share Via Instagram"></i>
              </a>
                </p>

            </div>
          </div>

        </div>

        <div class="col-lg-4">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Total Sales</h5>
              <!-- Line Chart -->
              <div id="lineChart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#lineChart"), {
                    series: [{
                      name: "Desktops",
                      data: [10, 41, 35, 51, 49, 62, 69, 91, 148]
                    }],
                    chart: {
                      height: 200,
                      type: 'line',
                      zoom: {
                        enabled: false
                      }
                    },
                    dataLabels: {
                      enabled: false
                    },
                    stroke: {
                      curve: 'straight'
                    },
                    grid: {
                      row: {
                        colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                        opacity: 0.5
                      },
                    },
                    xaxis: {
                      categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
                    }
                  }).render();
                });
              </script>
              <!-- End Line Chart -->

            </div>
          </div>

        </div>
      </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('seller.seller_portal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ashokpoudel/Documents/Web Devlopment/Laravel/Shipmate Git/project/resources/views/seller/dashboard/portal_dashboard.blade.php ENDPATH**/ ?>