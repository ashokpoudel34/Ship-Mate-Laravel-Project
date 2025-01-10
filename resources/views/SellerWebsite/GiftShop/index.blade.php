@extends('SellerWebsite.GiftShop.master')

@section('content')
        
        <div class="slider">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="{{ asset('template-giftshop/assets/images/slider/s1.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('template-giftshop/assets/images/slider/s2.jpg') }}" class="d-block w-100" alt="...">
                </div>
               
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
        </div>
        
        <div class="latest-products pt-5 pb-0">
            <div class="container-xl">
                <div class="section-tile row">
                   <div class="col-md-10 text-center mx-auto">
                         <h2>Featured Products</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet est sit amet sem malesuada bibendum. Nulla eget mauris at dolor fermentum blandit. Maecenas</p>
                   </div>
                </div>
                <div class="row mt-5">

                @foreach($product_data as $product)
                    <div class="col-lg-3 col-md-4 mb-4">
                        <div class="bg-white p-2 shadow-md">
                           <div class="text-center">
                               <a href="{{ route($data->link . 'giftshop.detail') }}">
                                    <img src="storage/{{$product->path}}" alt="">
                               </a>
                           </div>
                            <div class="detail p-2">
                                <h4 class="mb-1 fs-5 fw-bold">{{ $product->product_name }}</h4>
                                <b class="fs-4 text-danger">$ {{ $product->discounted_price }}</b>
                                <s class="fs-5 ps-3">$ {{ $product->price }}</s>
                                
                                <ul class="mt-0 vgth">
                                    <li class="fs-8">
                                        <i class="bi text-warning bi-star-fill"></i>
                                        <i class="bi text-warning bi-star-fill"></i>
                                        <i class="bi text-warning bi-star-fill"></i>
                                        <i class="bi text-warning bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li class="float-end gvi">
                                        <i class="bi text-danger bi-heart-fill"></i>
                                    </li>
                                </ul>
                                <div class="row pt-2">
                                    <div class="col-md-6">
                                        <a href="{{ route($data->link . 'giftshop.detail') }}">
                                            <button class="btn mb-2 fw-bold w-100 btn-danger">Buy Now</button>
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <button class="btn fw-bold w-100 btn-outline-danger">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                    
        
        <div class="ad-cover container-fluid pb-4">
           <div class="container-lg">
               <div class="row">
                    <div class="col-md-4">
                        <img class="bg-white shadow-md p-2" src="{{ asset('template-giftshop/assets/images/ads/1.webp') }}" alt="">
                    </div>
                     <div class="col-md-4">
                        <img class="bg-white shadow-md p-2" src="{{ asset('template-giftshop/assets/images/ads/a2.webp') }}" alt="">
                    </div>
                     <div class="col-md-4">
                        <img class="bg-white shadow-md p-2" src="{{ asset('template-giftshop/assets/images/ads/a3.webp') }}" alt="">
                    </div>
                </div>
           </div>
        </div>
        
        <div class="popular-brands big-padding bg-white container-fluid">
            <div class="container">
                 <div class="section-tile row">
                   <div class="col-md-10 text-center mx-auto">
                         <h2>Popular Brands</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet est sit amet sem malesuada bibendum. Nulla eget mauris at dolor fermentum blandit. Maecenas</p>
                   </div>
                </div>
                <div class="row pt-5">
                    <div class="col-lg-2 col-md-4 col-6 mb-4">
                        <div class="brand-cover">
                            <img src="{{ asset('template-giftshop/assets/images/brand/1.jpeg') }}" alt="">
                        </div>
                    </div>
                    
                    <div class="col-lg-2 col-md-4 col-6 mb-4">
                        <div class="brand-cover">
                            <img src="{{ asset('template-giftshop/assets/images/brand/client-02.jpeg') }}" alt="">
                        </div>
                    </div>
                    
                    <div class="col-lg-2 col-md-4 col-6 mb-4">
                        <div class="brand-cover">
                            <img src="{{ asset('template-giftshop/assets/images/brand/client-03.jpeg') }}" alt="">
                        </div>
                    </div>
                    
                    <div class="col-lg-2 col-md-4 col-6 mb-4">
                        <div class="brand-cover">
                            <img src="{{ asset('template-giftshop/assets/images/brand/client-04.jpeg') }}" alt="">
                        </div>
                    </div>
                    
                     <div class="col-lg-2 col-md-4 col-6 mb-4">
                        <div class="brand-cover">
                            <img src="{{ asset('template-giftshop/assets/images/brand/client-05.jpeg') }}" alt="">
                        </div>
                    </div>
                    
                     <div class="col-lg-2 col-md-4 col-6 mb-4">
                        <div class="brand-cover">
                            <img src="{{ asset('template-giftshop/assets/images/brand/client-06.jpeg') }}" alt="">
                        </div>
                    </div>
                    
                    <div class="col-lg-2 col-md-4 col-6 mb-4">
                        <div class="brand-cover">
                            <img src="{{ asset('template-giftshop/assets/images/brand/client-04.jpeg') }}" alt="">
                        </div>
                    </div>
                    
                    
                    <div class="col-lg-2 col-md-4 col-6 mb-4">
                        <div class="brand-cover">
                            <img src="{{ asset('template-giftshop/assets/images/brand/client-03.jpeg') }}" alt="">
                        </div>
                    </div>
                    
                    <div class="col-lg-2 col-md-4 col-6 mb-4">
                        <div class="brand-cover">
                            <img src="{{ asset('template-giftshop/assets/images/brand/client-05.jpeg') }}" alt="">
                        </div>
                    </div>
                    
                     <div class="col-lg-2 col-md-4 col-6 mb-4">
                        <div class="brand-cover">
                            <img src="{{ asset('template-giftshop/assets/images/brand/1.jpeg') }}" alt="">
                        </div>
                    </div>
                    
                    <div class="col-lg-2 col-md-4 col-6 mb-4">
                        <div class="brand-cover">
                            <img src="{{ asset('template-giftshop/assets/images/brand/client-02.jpeg') }}" alt="">
                        </div>
                    </div>
                    
                     <div class="col-lg-2 col-md-4 col-6 mb-4">
                        <div class="brand-cover">
                            <img src="{{ asset('template-giftshop/assets/images/brand/client-02.jpeg') }}" alt="">
                        </div>
                    </div>
                     
                </div>
            </div>
        </div>
        

        @endsection
