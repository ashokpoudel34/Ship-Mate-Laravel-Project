@extends('seller.seller_portal')

@section('content')

<div class="pagetitle">
  <h1>Analytics</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('site.seller.dashboard') }}">Home</a></li>
      <li class="breadcrumb-item">Analytics</li>
      <li class="breadcrumb-item active">Product</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

@endsection