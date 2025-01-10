@extends('SellerWebsite.GiftShop.master')

@section('content')




<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row gy-4 d-flex justify-content-between">
        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

<div class="card mb-3">

<div class="card-body">
@if($errors->any())
            <div class="alert alert-danger">
                <!-- @foreach($errors->all() as $e)
                    {{ $e }} <Br>
                @endforeach -->
                {{ $errors->first() }}
            </div>
        @endif


    <!-- @if (!empty(!session('wrong_seller_email')))
        <div class="alert alert-primary">Email Address not registered.</div>
    @endif -->
    <!-- @if( !empty(session('wrong_seller_email')))
        <div class="alert alert-danger">Enter your Email.</div>
    @endif -->
    <form action="{{ route($data->link . 'giftshop.reset') }}" method="POST" class="row g-3 ">
        @csrf
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" placeholder="Enter Email">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
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
