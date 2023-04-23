<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class buyerController extends Controller
{
    public function buyerLogin()
    {
        return view('buyer.buyer_login');
    }

    public function buyerSignup()
    {
        return view('buyer.buyer_signup');
    }

    public function buyerSignup_process(Request $request)
    {

        $request->validate(
            [
                "name" => "required",
                "phone" => "required|digits:10",
                "email" => "required|email",
                "password" => "required|min:6|confirmed",
                "password_confirmation" => "required|same:password"
            ],
            [
                "phone.required" => "You forgot your contact No.",
                "phone.digits" => "This number won't receive OTP."
            ]
        );

        $userEmail = $request->input('email');
        $userNumber = $request->input('phone');
        $otp = rand(100000, 999999);
        $message = "Your OTP code for Ship-Mate is: $otp\n";

        $request->session()->flash('register_process_done', true);
        // echo ($message);
        // echo ("Email: $userEmail");
        // echo ("\n");
        // echo ("Number: $userNumber\n");

        return redirect()->route('site.buyer.buyer_otp');
    }
    public function otpBuyer()
    {
        return view('buyer.otp_buyer_signup');
    }

    public function otpBuyer_process(Request $request)
    {
        $request->validate([
            "userotp" => "required"
        ]);

        $user_otp = $request->input('userotp');
        if ($user_otp == "12345") {
            $request->session()->flash('otp_verified', true);
            return redirect()->route("site.buyer.buyer_login");
        } else {
            echo ("wrong user otp");
        }
    }
}