@extends('seller.seller_portal')

@section('content')

<div class="pagetitle">
  <h1>Products</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active">All Products</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

@if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $e)
                    {{ $e }} <Br>
                @endforeach
            </div>
        @endif

        @if ($alert = Session::get('alert-success'))
	<div class="alert alert-success">{{ $alert }}</div>
    @endif

<h2>Product Information</h2>
    <form action="{{route('site.seller.allproducts')}}" method="POST" enctype="multipart/form-data">
      @csrf
        <label for="product_name">Product Name *</label><br>
        <input type="text" id="product_name" name="product_name" required><br><br>

        <label for="product_category">Product Category *</label><br>
        <input type="text" id="product_category" name="product_category" required><br><br>

        <label for="price">Price *</label><br>
        ₹ <input type="number" id="price" name="price" required><br><br>

        <label for="discounted_price">Discounted Price</label><br>
        ₹ <input type="number" id="discounted_price" name="discounted_price"><br><br>

        <label for="product_unit">Product Unit *</label><br>
        <input type="number" id="product_unit" name="product_unit" required>
        <select name="unit_type">
            <option value="piece">per piece</option>
            <option value="kg">per kg</option>
            <option value="liter">per liter</option>
            <!-- Add other unit options as needed -->
        </select><br><br>

        <label for="product_description">Product Description</label><br>
        <textarea id="product_description" name="product_description" rows="4" cols="50"></textarea><br><br>

        <label for="product_media">Product Media *</label><br>
            <a href="#" class="btn btn-primary btn-sm" title="Upload Product Image"><input type="file" name="product_image"><i class="bi bi-upload"></i></a><br><br>
        <input type="submit" value="Submit">
    </form>

@endsection
