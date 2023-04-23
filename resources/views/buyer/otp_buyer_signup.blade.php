@extends('buyer.buyer_master')

<link rel="stylesheet" href="{{ asset('client_css/UserLogincss/userLogin.css') }}">

@section('content')      

    <div class="form-div right-side">
        <div>
            @if( !empty(session('register_process_done')))
                <div class="aalert alert-primary">check your email or message for OTP.</div>
            @endif
        </div>

        @if($errors->any())
            <div class="alert alert-danger">
                <span>Enter valid OTP.</span>
                {{-- @foreach($errors->all() as $e)
                    {{ $e }} <Br>
                @endforeach --}}
            </div>
        @endif

        <form action="{{ route('site.buyer.buyer_otp') }}" method="POST" class="effect2">

            @csrf

            <div class="form-group">
                <label>OTP</label>
                <input type="text" class="form-control" name="userotp" placeholder="Enter OTP">
            </div>
 
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div></div>
@endsection