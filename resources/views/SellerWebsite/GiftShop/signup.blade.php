@extends('SellerWebsite.GiftShop.master')

@section('content')

        
     <!--  ************************* Page Title Starts Here ************************** -->
     <div class="page-nav no-margin row">
            <div class="container">
                <div class="row">
                    <h2 class="text-start">Sign Up Page</h2>
                    <ul>
                        <li> <a href="{{ route($data->link . 'homepage')}}"><i class="bi bi-house-door"></i> Home</a></li>
                        <li><i class="bi bi-chevron-double-right pe-2"></i> User Signup</li>
                    </ul>
                </div>
            </div>
        </div>
        
        
    <!--####################### About US Starts Here ###################-->
    <div class="container-fluid big-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-7 col-md-10 py-5 mx-auto">
                @if($errors->any())
            <div class="alert alert-danger">
                <!-- @foreach($errors->all() as $e)
                    {{ $e }} <Br>
                @endforeach -->
                {{ $errors->first() }}
            </div>
        @endif
                    <div class="login-card bg-white shadow-md p-5">
                        <h4 class="text-center mb-5">Enter your detail to Signup</h4>
                        <form class="row g-3 " action="{{ route($data->link . 'giftshop.signup') }}" id="registration-form" method="POST" enctype="multipart/form-data">
                            @csrf
                         <div class="form-row row">
                            <div class="col-md-4 pt-2">
                                <label for="">Full Name</label>
                                <span class="fw-bolder float-end">:</span>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="name" placeholder="Enter Full Name" class="form-control">
                            </div>
                        </div>
                        <div class="form-row row">
                            <div class="col-md-4 pt-2">
                                <label for="">Mobile number</label>
                                <span class="fw-bolder float-end">:</span>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="phone" placeholder="Enter Mobile Number" class="form-control">
                            </div>
                        </div>
                        <div class="form-row row">
                            <div class="col-md-4 pt-2">
                                <label for="">Email Address</label>
                                <span class="fw-bolder float-end">:</span>
                            </div>
                            <div class="col-md-8">
                                <input type="email" name="email" placeholder="Enter Email Address" class="form-control">
                            </div>
                        </div>
                         <div class="form-row row">
                            <div class="col-md-4 pt-2">
                                <label for="">Password</label>
                                <span class="fw-bolder float-end">:</span>
                            </div>
                            <div class="col-md-8">
                                <input type="password" name="password" placeholder="Enter Password" class="form-control">
                            </div>
                        </div>
                         <div class="form-row row">
                            <div class="col-md-4 pt-2">
                                <label for="">Confirm Password</label>
                                <span class="fw-bolder float-end">:</span>
                            </div>
                            <div class="col-md-8">
                                <input type="password" name="password_confirmation" placeholder="Enter Password" class="form-control">
                            </div>
                        </div>
                        <div class="form-row row">
                            <div class="col-md-4 pt-2">
                              
                            </div>
                            <div class="col-md-8">
                               <button class="btn btn-danger">Click to Signup</button>
                              <a href="{{ route($data->link . 'giftshop.reset') }}"><span class="float-end pt-2">Forgot Password ?</span></a> 
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   

    @endsection