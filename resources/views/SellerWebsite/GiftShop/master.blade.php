<!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>{{ $data->name }}</title>
        <link rel="shortcut icon" href="{{ asset('template-giftshop/assets/images/fav.png') }}" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="{{ asset('template-giftshop/assets/images/fav.jpg') }}">
        <link rel="stylesheet" href="{{ asset('template-giftshop/assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('template-giftshop/assets/css/style.css') }}" />
    </head>
    <bod>
        <header class="container-fluid bg-white">
            <div class="header-top bg-gray  border-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <ul class="d-inline-flex pt-0 pt-md-2 fs-6">
                                <li class="p-2 "><i class="bi bi-envelope"></i>{{ $data->email }}</li>
                                <li class="p-2 d-none d-md-block"><i class="bi bi-headphones"></i>{{ $data->mobile }}</li>
                            </ul>
                        </div>
                        <div class="col-md-4 d-flex align-items-end">
                            <ul class="ms-auto d-inline-flex">
                                <li class="p-2"><a  href="{{ route($data->link . 'giftshop.login')}}"><button class="btn px-4 btn-danger">Login</button></a></li>
                                <li class="p-2"><a  href="{{ route($data->link . 'giftshop.signup')}}"><button class="btn px-4 btn-outline-danger">Sign Up</button></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>       

            
            <div class="logo-contaienr p-2">
                 <div class="container">
                     <div class="row">
                         <div class="col-md-3 col-9 pt-1 pb-2">
                            <a href="{{ route($data->link . 'homepage')}}">
                                <img class="logo" src="{{ asset('template-giftshop/assets/images/logo.jpg') }}" alt="">
                            </a> 
                         </div>
                         <div class="col-md-6 d-none d-md-block pt-2">
                              <div class="input-group pt-1 mb-0">
                                  <input type="text" class="form-control border-end-0 mb-0" placeholder="Search Apps" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                  <span class="input-group-text sit border-start-0" id="basic-addon2"><i class="bi bi-search"></i></span>
                            </div>
                         </div>
                         <div class="col-md-3 col-3 pt-1 text-end">
                             <a href="{{ route($data->link . 'giftshop.cart') }}">
                                 <button type="button" class="btn btn-light shadow-md border position-relative">
                                  <i class="bi fs-4 bi-basket"></i>
                                  <span class="position-absolute fs-6 top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    2

                                  </span>
                                </button>
                             </a>
                            
                             <a href="{{ route($data->link . 'giftshop.cart') }}">
                            <button type="button" class="btn d-none d-md-inline-block ms-3 btn-light shadow-md border position-relative">
                              <i class="bi fs-4 bi-heart"></i>
                              <span class="position-absolute fs-6 top-0 start-100 translate-middle badge rounded-pill bg-warning">
                                2
                               
                              </span>
                            </button>
                            </a>

                            
                         </div>
                     </div>
                 </div>   


            </div>
            <div class="menu-bar bg-danger container-fluid border-top">
                <div class="container">
                   <h6 class="d-md-none text-white p-3 mb-0 fw-bold">Menu 
                  <a class="text-white" data-bs-target="#menu" data-bs-toggle="collapse" aria-expanded="false" aria-controls="menu"><i class="bi cp bi-list float-end fs-1 dmji"></i></a> 
                   </h6>
                    <ul id="menu" class=" navcol fw-bold d-none d-md-inline-flex">
                        <li class="p-21 px-4"><a class="text-white" href="">Categories <i class="bi pt-2 bi-chevron-down"></i></a> 
                            <div class="inner-div">
                                <ul class="">
                                    <li><a href="">Baby</a></li>
                                    <li><a href="">Beauty & Personal Care</a></li>
                                    <li><a href="">Business & Executive Gifts</a></li>
                                    <li><a href="">Chocolates & Cookies</a></li>
                                    <li><a href="">Computer & Mobile Accessories</a></li>
                                    <li><a href="">Flowers & Cakes</a></li>
                                    <li><a href="">Garden Gifts</a></li>
                                    <li><a href="">Gag & Quirky Gifts</a></li>
                                    <li><a href="">Gift Baskets & Hampers</a></li>
                                    <li><a href="">Gift Cards</a></li>
                                    <li><a href="">Home & Living</a></li>
                                    <li><a href="">Jewellery</a></li>
                                    <li><a href="">Love & Romance</a></li>
                                </ul>
                            </div>
                        </li>
                          <li class="p-21 px-4"><a class="text-white" href="">Pages <i class="bi pt-2 bi-chevron-down"></i></a> 
                            <div class="inner-div">
                                <ul class="">
                                    <li><a href="{{ route($data->link . 'homepage')}}">Home</a></li>
                                    <li><a href="{{ route($data->link . 'giftshop.about') }}">About US</a></li>
                                    <li><a href="{{ route($data->link . 'giftshop.contact') }}">Contact US</a></li>
                                    <li><a href="{{ route($data->link . 'giftshop.product') }}">Product Listing</a></li>
                                    <li><a href="{{ route($data->link . 'giftshop.detail') }}">Product Detail</a></li>
                                    <li><a href="{{ route($data->link . 'giftshop.login') }}">login</a></li>
                                    <li><a href="{{ route($data->link . 'giftshop.signup') }}">Sign Up</a></li>
                                    <li><a href="{{ route($data->link . 'giftshop.cart') }}">Cart</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="p-21 px-4"><a class="text-white" href="">Anniversary <i class="bi pt-2 bi-chevron-down"></i></a></li>
                        <li class="p-21 px-4"><a class="text-white" href="">Birthday <i class="bi pt-2 bi-chevron-down"></i></a></li>
                        <li class="p-21 px-4"><a class="text-white" href="">Personal <i class="bi pt-2 bi-chevron-down"></i></a></li>
                        <li class="p-21 px-4"><a class="text-white" href="">Reception <i class="bi pt-2 bi-chevron-down"></i></a></li>
                        <li class="p-21 px-4"><a class="text-white" href="">Occasions </a></li>
                        
                        <li class="p-21 px-4"><a class="text-white" href="">Surprise </a></li>
                    </ul>
                </div>
            </div>
        </header>
        
        @yield('content')

        
    <footer>
        <div class="inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 foot-about">
                        <h4>About US</h4>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras hendrerit libero pellentesque libero interdum, id mattis felis dictum. Praesent eget lacus tempor justo efficitur malesuada. Cras ut suscipit nisi.</p>

                        <ul>
                            <li>23 Rose Stren Melbourn</li>
                            <li>sales@smarteyeapps.com</li>
                            <li>+91 876 766 554</li>
                        </ul>
                    </div>

                    <div class="col-md-3 foot-post">
                        <h4>Latest Posts</h4>

                        <div class="post-row">
                            <div class="image">
                                <img src="{{ asset('template-giftshop/assets/images/blog/1.jpg') }}" alt="">
                            </div>
                            <div class="detail ps-2">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras hendrerit </p>
                            </div>
                        </div>

                        <div class="post-row">
                            <div class="image">
                                <img src="{{ asset('template-giftshop/assets/images/blog/7.jpg') }}" alt="">
                            </div>
                            <div class="detail p-2">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras hendrerit </p>
                            </div>
                        </div>

                        <div class="post-row">
                            <div class="image">
                                <img src="{{ asset('template-giftshop/assets/images/blog/6.jpg') }}" alt="">
                            </div>
                            <div class="detail ps-2">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras hendrerit </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 foot-services">
                        <h4>Top Category</h4>

                        <ul>
                            <li><a href="">Target Statergy</a></li>
                            <li><a href="">Web Analytics</a></li>
                            <li><a href="">Page Monitering</a></li>
                            <li><a href="">Page Optimization</a></li>
                            <li><a href="">Target Statergy</a></li>
                            <li><a href="">Email Marketing</a></li>
                        </ul>
                    </div>

                    <div class="col-md-3 foot-news">
                        <h4>News Letter</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo neque, vehicula eget eros. </p>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control mb-0" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text bg-danger" id="basic-addon2"><i class="bi text-white bi-send"></i></span>
                            </div>
                        </div>

                        <ul>
                            <li><i class="bi bi-facebook"></i></li>
                            <li><i class="bi bi-twitter"></i></li>
                            <li><i class="bi bi-instagram"></i></li>
                            <li><i class="bi bi-linkedin"></i></li>
                            <li><i class="bi bi-pinterest"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="copy">
        <div class="container">
            <a href="http://shipmate.ashok.live">2024 &copy; All Rights Reserved | Designed and Developed by Team Shipmate</a>

            <span>
                <a href=""><i class="fab fa-github"></i></a>
                <a href=""><i class="fab fa-google-plus-g"></i></a>
                <a href="https://in.pinterest.com/#"><i class="fab fa-pinterest-p"></i></a>
                <a href="https://twitter.com/#"><i class="fab fa-twitter"></i></a>
                <a href="https://www.facebook.com/#"><i class="fab fa-facebook-f"></i></a>
            </span>
        </div>
    </div>
        
    </bod>
    <script src="{{ asset('template-giftshop/assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('template-giftshop/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('template-giftshop/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template-giftshop/assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js') }}"></script>
    <script src="{{ asset('template-giftshop/assets/plugins/testimonial/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('template-giftshop/assets/js/script.js') }}"></script>

</html>