@extends('seller.seller_portal')

@section('content')

<div class="pagetitle">
  <h1>Appreance</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('/welcome') }}">Home</a></li>
      <li class="breadcrumb-item"><a href="{{ url('/menu') }}">Menu</a></li>
      <li class="breadcrumb-item active">Add</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<div class="container mt-5">
  <h2>Create Data</h2>
  <form method="POST" action="{{ route('site.seller.menuadd') }}">
    @csrf <!-- Include the CSRF token -->
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" id="title" name="title" required>
    </div>
    <div class="mb-3">
      <label for="heading" class="form-label">Heading</label>
      <input type="text" class="form-control" id="heading" name="heading" required>
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection