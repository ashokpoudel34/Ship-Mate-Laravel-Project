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

@if ($alert = Session::get('alert-success'))
	<div class="alert alert-success">{{ $alert }}</div>
    @endif

<div class="container">
        <h1 class="mt-4">Product List</h1>
        <ul class="list-group mt-4">
        @foreach($product_data as $data)
            <li class="list-group-item">
                <div class="row">
                    <div class="col-md-3">
                        <img src="storage/{{$data->path}}" alt="{{ $data->product_name }}" class="img-fluid rounded">
                    </div>
                    <div class="col-md-6">
                        <h2>{{ $data->product_name }}</h2>
                        <p>{{ $data->product_description }}</p>
                        <p>Price: ₹{{ $data->price }}</p>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-info me-2">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </li>
        @endforeach
        </ul>

        <a  class="btn btn-primary mt-4" href="{{ route('site.seller.newproducts') }}">Add New Product</a>
        <!-- <button ahref = "{{ route('site.seller.newproducts') }}" class="btn btn-primary mt-4">Add New Product</button> -->
    </div>

@endsection
