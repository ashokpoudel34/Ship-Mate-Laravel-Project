@extends('SellerWebsite.GiftShop.master')

@section('content')

        
     <!--  ************************* Page Title Starts Here ************************** -->
     <div class="page-nav no-margin row">
            <div class="container">
                <div class="row">
                    <h2 class="text-start">About Us</h2>
                    <ul>
                        <li> <a href="{{ route($data->link . 'homepage')}}"><i class="bi bi-house-door"></i> Home</a></li>
                        <li><i class="bi bi-chevron-double-right pe-2"></i> About Us</li>
                    </ul>
                </div>
            </div>
        </div>
        
        
    <!--####################### About US Starts Here ###################-->
    <div class="container-fluid big-padding about-cover">
        <div class="container">
            <div class="row about-row">
                <div class="col-md-6 no-padding image">
                    <img src="{{ asset('template-giftshop/assets/images/blog/2.jpg') }}" alt="">
                </div>
                <div class="col-md-6 detail ps-4 ">
                    <h2>About Smart Computers</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque  consectetur adipiscing elit. Pellentesque tincidunt metus quis enim fermentum, a posuere ligula vestibulum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi turpis tortor, ultrices eu posuere eu, eleifend eget eros. Quisque maximus tellus eu magna bibendum faucibus.</p>
                    <p>Vestibulum convallis rhoncus efficitur. Sed pellentesque sed eros in maximus. Praesent vel nibh sem. Mauris efficitur sodales libero id volutpat. Vestibulum sit amet diam massa. Nunc vestibulum suscipit faucibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque maximus metus at nisl aliquet lobortis. Praesent mollis quam et viverra placerat.</p>
                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque  consectetur adipiscing elit. Pellentesque tincidunt metus quis enim fermentum, a posuere ligula vestibulum. Pellentesque habitant morbi tortor, ultrices eu posuere eu, eleifend eget eros. Quisque maximus tellus eu magna bibendum faucibus.</p>
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
