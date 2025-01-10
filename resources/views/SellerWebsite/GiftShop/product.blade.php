@extends('SellerWebsite.GiftShop.master')

@section('content')

        
     <!--  ************************* Page Title Starts Here ************************** -->
     <div class="page-nav no-margin row">
            <div class="container">
                <div class="row">
                    <h2 class="text-start">View All Products</h2>
                    <ul>
                        <li> <a href="{{ route($data->link . 'homepage')}}"><i class="bi bi-house-door"></i> Home</a></li>
                        <li><i class="bi bi-chevron-double-right pe-2"></i> View All Products</li>
                    </ul>
                </div>
            </div>
        </div>
        
        
        <div class="container-fluid  py-5 product-cover">
            <div class="container-xl">
                <div class="row">
                    <div class="col-md-3">
                        <h4 class="fs-5">Filter by Category</h4>
                        <ul class="filt">
                            <li> <input class="form-check-input me-1 bg-danger border-danger" checked type="checkbox" value=""             id="flexCheckDefault"> Baby </li>
                            <li><a href=""><input class="form-check-input me-1 bg-danger border-danger" type="checkbox" value=""             id="flexCheckDefault"> Beauty & Personal Care</a></li>
                            <li><a href=""><input class="form-check-input me-1 bg-danger border-danger" checked type="checkbox" value=""             id="flexCheckDefault"> Business & Executive Gifts</a></li>
                            <li><a href=""><input class="form-check-input me-1 bg-danger border-danger" type="checkbox" value=""             id="flexCheckDefault">Chocolates & Cookies</a></li>
                            <li><a href=""><input class="form-check-input me-1 bg-danger border-danger" type="checkbox" value=""             id="flexCheckDefault"> Computer & Mobile Accessories</a></li>
                            <li><a href=""><input class="form-check-input me-1 bg-danger border-danger" type="checkbox" value=""             id="flexCheck<input class="form-check-input bg-danger border-danger" type="checkbox" value=""             id="flexCheckDefault">Default">Flowers & Cakes</a></li>
                            <li><a href=""><input class="form-check-input me-1 bg-danger border-danger" type="checkbox" value=""             id="flexCheckDefault"> Garden Gifts</a></li>
                            <li><a href=""><input class="form-check-input me-1 bg-danger border-danger" type="checkbox" value=""             id="flexCheckDefault"> Gag & Quirky Gifts</a></li>
                            <li><a href=""><input class="form-check-input bg-danger border-danger" type="checkbox" value=""             id="flexCheckDefault"> Gift Baskets & Hampers</a></li>
                            <li><a href=""><input class="form-check-input me-1 bg-danger border-danger" type="checkbox" value=""             id="flexCheckDefault"> Gift Cards</a></li>
                            <li><a href=""><input class="form-check-input me-1 bg-danger border-danger" type="checkbox" value=""             id="flexCheckDefault"> Home & Living</a></li>
                            <li><a href=""><input class="form-check-input me-1 bg-danger border-danger" type="checkbox" value=""             id="flexCheckDefault"> Jewellery</a></li>
                            <li><a href=""><input class="form-check-input me-1 bg-danger border-danger" type="checkbox" value=""             id="flexCheckDefault"> Love & Romance</a></li>
                        </ul>
                        
                         <h4 class="fs-5 mt-3">Filter by Price Range</h4>
                        <ul class="filt">
                            <li> <input class="form-check-input me-1 bg-danger border-danger" checked type="checkbox" value=""             id="flexCheckDefault"> 50$ to 100$ </li>
                            <li><a href=""><input class="form-check-input me-1 bg-danger border-danger" type="checkbox" value=""             id="flexCheckDefault"> 100$ to 200$</a></li>
                            <li><a href=""><input class="form-check-input me-1 bg-danger border-danger" checked type="checkbox" value="" id="flexCheckDefault"> 200$ to 300$</a></li>
                            
                             <li><a href=""><input class="form-check-input me-1 bg-danger border-danger" checked type="checkbox" value=""  id="flexCheckDefault"/> 300$ to 400$</a></li>
                          
                            <li><a href=""><input class="form-check-input me-1 bg-danger border-danger" type="checkbox" value=""             id="flexCheckDefault"/> 400$ to 500$</a></li>
                            <li><a href=""><input class="form-check-input me-1 bg-danger border-danger" type="checkbox" value=""             id="flexCheckDefault"/>  500$ to 600$</a></li>
                             <li><a href=""><input class="form-check-input me-1 bg-danger border-danger" type="checkbox" value=""             id="flexCheckDefault"/>  600$ to 700$</a></li>
                            <li><a href=""><input class="form-check-input me-1 bg-danger border-danger" type="checkbox" value=""             id="flexCheckDefault"/>  700$ to 800$</a></li>
                        </ul>
                        
                         
                         <h4 class="fs-5 mt-3">Filter by Brand</h4>
                        <ul class="filt">
                            <li>  <input class="form-check-input border-danger bg-danger" type="radio" name="exampleRadios" id="exampleRadios1" value="option1"> Aviva </li>
                            <li>  <input class="form-check-input border-danger bg-danger" checked type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked> Benquee </li>
                            <li>  <input class="form-check-input border-danger bg-danger"  type="radio" name="exampleRadios" id="exampleRadios1" value="option1" > Moser Bear </li>
                            <li>  <input class="form-check-input border-danger bg-danger"  type="radio" name="exampleRadios" id="exampleRadios1" value="option1" > Vandesal</li>
                            <li>  <input class="form-check-input border-danger bg-danger"  type="radio" name="exampleRadios" id="exampleRadios1" value="option1" > Open Grid</li>
                            <li>  <input class="form-check-input border-danger bg-danger"  type="radio" name="exampleRadios" id="exampleRadios1" value="option1" > Green Wonder</li>
                            <li>  <input class="form-check-input border-danger bg-danger"  type="radio" name="exampleRadios" id="exampleRadios1" value="option1" > Wool Master</li>
                            <li>  <input class="form-check-input border-danger bg-danger"  type="radio" name="exampleRadios" id="exampleRadios1" value="option1" > Gray Land</li>
                             
                        </ul>
                        
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6 mb-4">
                                <div class="bg-white p-2 shadow-md">
                                   <div class="text-center">
                                        <a href="{{ route($data->link . 'giftshop.detail') }}">
                                            <img src="{{ asset('template-giftshop/assets/images/product/p1.jpg') }}" alt="">
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

                            <div class="col-lg-4 col-sm-6 mb-4">
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

                            <div class="col-lg-4 col-sm-6 mb-4">
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

                            <div class="col-lg-4 col-sm-6 mb-4">
                                <div class="bg-white p-2 shadow-md">
                                    <div class="text-center">
                                        <a href="{{ route($data->link . 'giftshop.detail') }}">
                                            <img src="{{ asset('template-giftshop/assets/images/product/p4.jpg') }}" alt="">
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


                            <div class="col-lg-4 col-sm-6 mb-4">
                                <div class="bg-white p-2 shadow-md">
                                    <div class="text-center">
                                        <img src="{{ asset('template-giftshop/assets/images/product/p2.jpg') }}" alt="">
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

                            <div class="col-lg-4 col-sm-6 mb-4">
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
                                                <button class="btn mb-2 fw-bold w-100 btn-danger">Buy Now</button>
                                            </div>
                                            <div class="col-md-6">
                                                <button class="btn fw-bold w-100 btn-outline-danger">Add to Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-sm-6 mb-4">
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
                                                <button class="btn mb-2 fw-bold w-100 btn-danger">Buy Now</button>
                                            </div>
                                            <div class="col-md-6">
                                                <button class="btn fw-bold w-100 btn-outline-danger">Add to Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6 mb-4">
                                <div class="bg-white p-2 shadow-md">
                                    <div class="text-center">
                                        <img src="{{ asset('template-giftshop/assets/images/product/p2.jpg') }}" alt="">
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

                            <div class="col-lg-4 col-sm-6 mb-4">
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
                                                <button class="btn mb-2 fw-bold w-100 btn-danger">Buy Now</button>
                                            </div>
                                            <div class="col-md-6">
                                                <button class="btn fw-bold w-100 btn-outline-danger">Add to Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <nav class="" aria-label="...">
                              <ul class="pagination justify-content-end">
                                <li class="page-item disabled">
                                  <a class="page-link">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active" aria-current="page">
                                  <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                  <a class="page-link" href="#">Next</a>
                                </li>
                              </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    
        
        @endsection