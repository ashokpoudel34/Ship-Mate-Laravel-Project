@extends('HomePage.master')

@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row gy-4 d-flex justify-content-between">
        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

<div class="card mb-3">
<div class="card-body">
                @if( ! empty( session('seller_otp_verified')))
                    <div class="alert alert-success">Registration Successful. Please Login.</div>
                @endif

                @if( ! empty( session('reset_otp_verified')))
                    <div class="alert alert-success">Reset Successful. Please Login.</div>
                @endif

                @if ($error = $errors->first('err'))
                    <div class="alert alert-danger">{{ $error }}</div>
                @endif

  <div class="pt-1 pb-1">
    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
    <p class="text-center small">Enter your username & password to login</p>
  </div>

  <form class="row g-2 " action="{{ route('site.seller.seller_login') }}" method="POST" enctype="multipart/form-data">
@csrf
    <div class="col-12">
      <label for="yourUsername" class="form-label">Email</label>
      <div class="input-group has-validation">
        <span class="input-group-text" id="inputGroupPrepend">@</span>
        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
        <div class="invalid-feedback">Please enter your Email.</div>
      </div>
    </div>

    <div class="col-12">
      <label for="yourPassword" class="form-label">Password</label>
      <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
      <div class="invalid-feedback">Please enter your password!</div>
    </div>

    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
        <label class="form-check-label" for="rememberMe">Remember me</label>
      </div>
    </div>
    <div class="col-12">
      <button class="btn btn-primary w-100" type="submit">Login</button>
    </div>

    @if ($error = $errors->first('err'))
    <div class="col-12">
      <p class="small mb-0">Forgot Password? <a href="{{ route('site.seller.seller_reset') }}">Reset Password</a></p>
    </div>
    @else
    <div class="col-12">
      <p class="small mb-0">Don't have account? <a href="{{ route('site.seller.seller_signup') }}">Create an account</a></p>
    </div>

    @endif

  </form>

</div>
</div>
        
</div>

        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
          <img src="{{ asset('landing_page/assets/img/hero-img.svg') }}" class="img-fluid mb-3 mb-lg-0" alt="">
        </div>

      </div>
    </div>
  </section><!-- End Hero Section -->


@endsection