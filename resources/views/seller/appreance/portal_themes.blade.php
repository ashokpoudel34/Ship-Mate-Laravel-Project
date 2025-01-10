@extends('seller.seller_portal')

@section('content')

<div class="pagetitle">
  <h1>Appreance</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active">Themes</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<div class="row">

<div class="col-lg-4">
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Restaurant</h5>
        <p>This is a sample Template for Hotel and Restaurant</p>
        <img src="{{asset('template-res/assets/img/hero-bg.jpg')}}" alt="" height="200px" width="260px" ><br><br>

        <button onclick="window.location.href='{{ url('/theme/apply/0') }}'">
        Apply
        @if($data->theme_id == '0')
        ed
        @endif</button>
    </div>
</div>
</div>

<div class="col-lg-4">
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Ecommerce Store</h5>
        <p>This is a sample Template for E-Commerce Bussiness</p>
        <img src="{{asset('assets/img/product-1.png')}}" alt="" height="200px" width="260px" ><br><br>

        <button onclick="window.location.href='{{ url('/theme/apply/1') }}'">
        Apply
        @if($data->theme_id == '1')
        ed
        @endif</button>
    </div>
</div>
</div>

<div class="col-lg-4">
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Electric Shop</h5>
        <p>This is a sample Template for Electronic Bussiness</p>
        <img src="{{asset('assets/img/product-5.jpg')}}" alt="" height="200px" width="260px" ><br><br>

        <button onclick="window.location.href='{{ url('/theme/apply/2') }}'">
        Apply
        @if($data->theme_id == '2')
        ed
        @endif</button>
    </div>
</div>
</div>

<div class="col-lg-4">
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Gift Shop</h5>
        <p>This is a sample Template for Gift Shop</p>
        <img src="{{asset('assets/img/product-6.jpg')}}" alt="" height="200px" width="260px" ><br><br>

        <button onclick="window.location.href='{{ url('/theme/apply/3') }}'">
        Apply
        @if($data->theme_id == '3')
        ed
        @endif</button>
    </div>
</div>
</div>


</div>



@endsection
