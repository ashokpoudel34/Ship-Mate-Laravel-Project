@extends('SellerWebsite.GiftShop.master')

@section('content')

        
     <!--  ************************* Page Title Starts Here ************************** -->
     <div class="page-nav no-margin row">
            <div class="container">
                <div class="row">
                    <h2 class="text-start">Personalised Birthday Easel</h2>
                    <ul>
                        <li> <a href="{{ route($data->link . 'homepage')}}"><i class="bi bi-house-door"></i> Home</a></li>
                          <li><i class="bi bi-chevron-double-right pe-2"></i> Products</li>
                        <li><i class="bi bi-chevron-double-right pe-2"></i> Personalised Birthday Easel</li>
                    </ul>
                </div>
            </div>
        </div>
        
        
    <!--####################### Product Detail Starts Here ###################-->
    <div class="container-fluid big-padding bg-white about-cover">
        <div class="container">
            <div class="row about-row">
                <div class="col-md-5 text-center">
                    <img src="{{ asset('template-giftshop/assets/images/product/p1.jpg') }}" alt="">
                </div>
                <div class="col-md-7">
                    <h2>Personalised Birthday Easel</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras hendrerit libero pellentesque libero interdum, id mattis felis dictum. Praesent eget lacus tempor justo efficitur malesuada. Cras ut suscipit nisi eget lacus tempor justo efficitur.</p>
                    <b class="fs-3 py-4 text-danger">$44.00</b>
                     <span class="fs-5 ps-3">60.00</span>
                     <ul class="mt-0 mt-2 mb-3 vgth">
                        <li class="fs-8">
                            <i class="bi text-warning bi-star-fill"></i>
                            <i class="bi text-warning bi-star-fill"></i>
                            <i class="bi text-warning bi-star-fill"></i>
                            <i class="bi text-warning bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <span>4,2</span>
                        </li>
                        <li class="float-end gvi">
                            <i class="bi text-danger bi-heart-fill"></i>
                        </li>
                    </ul>
                    <ul class="key-features mt-2">
                        <li><i class="bi bi-caret-right"></i> Newly Added</li>
                        <li><i class="bi bi-caret-right"></i> Made with Fresh Flowers</li>
                        <li><i class="bi bi-caret-right"></i> Well Packed</li>
                        <li><i class="bi bi-caret-right"></i> Timely Delivery</li>
                        <li><i class="bi bi-caret-right"></i> Fresh Leafes Used</li>
                        <li><i class="bi bi-caret-right"></i> Properly Packed</li>
                    </ul>
                </div>
            </div>
            <div class="row product-detail">
               <h4>Product Detail</h4>
                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu velit nec neque tempus commodo. Mauris dictum nunc vitae elit porta blandit. Proin non laoreet odio. Sed aliquet, turpis sodales mattis fringilla, massa nulla iaculis justo, sit amet imperdiet libero orci eget neque. Morbi tincidunt vehicula vulputate. Vestibulum efficitur accumsan scelerisque. Nulla rutrum neque id nunc aliquam suscipit. Fusce eget arcu aliquet, gravida massa non, fringilla sem. Cras sapien dui, varius vitae nisi eget, tristique mattis justo. Fusce auctor consequat leo, ac mattis sem fermentum condimentum. Suspendisse ultrices elementum diam eget lobortis. Morbi et libero odio. Sed rutrum augue eget ante laoreet finibus.</p>
                <p class="mb-3">Suspendisse pellentesque feugiat nunc, a finibus eros mollis at. Proin lorem nisi, commodo vitae nibh sit amet, tempor posuere neque. Vivamus lobortis est nec libero maximus, feugiat iaculis sem laoreet. Suspendisse porta egestas justo, feugiat gravida turpis. Quisque ut tristique nibh, vel auctor erat. Proin eget finibus diam. Sed in tortor vitae risus elementum iaculis.</p>
                <p class="mb-3">Quisque vitae est elit. Phasellus sed quam felis. Sed eget nisi varius, finibus eros vitae, porta quam. Aliquam pulvinar placerat placerat. Nulla at mattis sem. Nam eget auctor massa, et tristique lacus. Sed lacus dolor, commodo ac blandit sit amet, lacinia id quam. Vivamus hendrerit risus id lectus convallis, quis feugiat ligula auctor. Curabitur ante nulla, vestibulum a eros vitae, ultricies molestie purus. Maecenas sed elit nec sapien tristique tincidunt. Aliquam laoreet nulla ac metus mattis viverra. Fusce hendrerit, augue eget hendrerit pellentesque, lorem nulla condimentum massa, efficitur pellentesque tortor sapien sed lectus. Nullam et lorem ut turpis finibus facilisis in vel orci. Nunc vitae urna sit amet libero scelerisque efficitur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget lectus imperdiet, scelerisque nunc id, pharetra metus.</p>
            </div>
            <div class="row review">
                <div class="col-md-8">
                     <h4>Product Review</h4>
                     <div class="row m-0 reviewrow p-3 px-0 border-bottom">
                        <div class="col-md-12 align-items-center col-9 rcolm"> 
                            <div class="review">
                                <li class="col-8 ratfac">
                                     <i class="bi text-warning bi-star-fill"></i>
                                     <i class="bi text-warning bi-star-fill"></i>
                                     <i class="bi text-warning bi-star-fill"></i>
                                     <i class="bi bi-star-fill"></i>
                                     <i class="bi bi-star-fill"></i>
                                 </li>              
                            </div>
                            <h3 class="fs-6 fw-semi mt-2">Vinoth kumar

                            <small class="float-end fw-normal"> 20 Aug 2022 </small>
                            </h3>

                            <div class="review-text">
                                 Aliquam laoreet nulla ac metus mattis viverra. Fusce hendrerit, augue eget hendrerit pellentesque, lorem nulla condimentum massa, efficitur pellentesque tortor sapien sed lectus
                            </div>
                        </div>
                        <div class="col-md-2">

                        </div>
                    </div>

                    <div class="row m-0 reviewrow p-3 px-0 border-bottom">
                        <div class="col-md-12 align-items-center col-9 rcolm"> 
                            <div class="review">
                                <li class="col-8 ratfac">
                                     <i class="bi text-warning bi-star-fill"></i>
                                     <i class="bi text-warning bi-star-fill"></i>
                                     <i class="bi text-warning bi-star-fill"></i>
                                     <i class="bi bi-star-fill"></i>
                                     <i class="bi bi-star-fill"></i>
                                 </li>              
                            </div>
                            <h3 class="fs-6 fw-semi mt-2">Vinoth kumar

                            <small class="float-end fw-normal"> 20 Aug 2022 </small>
                            </h3>

                            <div class="review-text">
                                consectetur adipiscing elit. Nunc eget lectus imperdiet, scelerisque nunc id, pharetra metus.
                            </div>
                        </div>
                        <div class="col-md-2">

                        </div>
                    </div>

                    <div class="row m-0 reviewrow px-0">
                        <div class="col-md-12 align-items-center col-9 rcolm"> 
                            <div class="review">
                                <li class="col-8 ratfac">
                                     <i class="bi text-warning bi-star-fill"></i>
                                     <i class="bi text-warning bi-star-fill"></i>
                                     <i class="bi text-warning bi-star-fill"></i>
                                     <i class="bi bi-star-fill"></i>
                                     <i class="bi bi-star-fill"></i>
                                 </li>              
                            </div>
                            <h3 class="fs-6 fw-semi mt-2">Vinoth kumar

                            <small class="float-end fw-normal"> 20 Aug 2022 </small>
                            </h3>

                            <div class="review-text">
                                Great work, keep it up
                            </div>
                        </div>
                        <div class="col-md-2">

                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        
        <div class="container-fluid big-padding relatrd">
           <div class="container">
               <div class="section-tile row">
                   <div class="col-md-10 mb-4 text-center mx-auto">
                         <h2>Related Products</h2>
                   </div>
                </div>
               <div class="row">
                    <div class="col-lg-3 col-md-4 mb-4">
                        <div class="bg-white p-2 shadow-md">
                            <div class="text-center">
                               <a href="{{ route($data->link . 'giftshop.detail') }}">
                                   <img src="{{ asset('template-giftshop/assets/images/product/p3.jpg') }}" alt="">
                               </a>
                            </div>
                            <div class="detail p-2">
                                <h4 class="mb-1 fs-5 fw-bold">Personalised Birthday Easel</h4>
                                <b class="fs-4 text-danger">$44.00</b>
                                <s class="fs-5 ps-3">60.00</s>
                                
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
                                        <button class="btn mb-2 fw-bold w-100 btn-danger">Buy Now</button>
                                    </div>
                                    <div class="col-md-6">
                                        <button class="btn fw-bold w-100 btn-outline-danger">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mb-4">
                        <div class="bg-white p-2 shadow-md">
                            <div class="text-center">
                               <a href="{{ route($data->link . 'giftshop.detail') }}">
                                 <img src="{{ asset('template-giftshop/assets/images/product/p2.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="detail p-2">
                                <h4 class="mb-1 fs-5 fw-bold">Personalised Birthday Easel</h4>
                                <b class="fs-4 text-danger">$44.00</b>
                                <s class="fs-5 ps-3">60.00</s>
                                
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
                    
                    <div class="col-lg-3 col-md-4 mb-4">
                        <div class="bg-white p-2 shadow-md">
                            <div class="text-center">
                                <img src="{{ asset('template-giftshop/assets/images/product/p1.jpg') }}" alt="">
                            </div>
                            <div class="detail p-2">
                                <h4 class="mb-1 fs-5 fw-bold">Personalised Birthday Easel</h4>
                                <b class="fs-4 text-danger">$44.00</b>
                                <s class="fs-5 ps-3">60.00</s>
                                
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
                                       <a href="detail.html">
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
                    
                    <div class="col-lg-3 col-md-4 mb-4">
                        <div class="bg-white p-2 shadow-md">
                            <div class="text-center">
                                <img src="{{ asset('template-giftshop/assets/images/product/p4.jpg') }}" alt="">
                            </div>
                            <div class="detail p-2">
                                <h4 class="mb-1 fs-5 fw-bold">Personalised Birthday Easel</h4>
                                <b class="fs-4 text-danger">$44.00</b>
                                <s class="fs-5 ps-3">60.00</s>
                                
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
                                       <a href="detail.html">
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
               </div>
           </div>
        </div>
   
        
        @endsection
