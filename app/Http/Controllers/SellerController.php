<?php

namespace App\Http\Controllers;

use App\Models\seller;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Console\Input\Input;

class SellerController extends Controller
{

    public function sellerLogin()
    {
        // echo "hello login";
        Auth::logout();
        return view('seller.seller_login');
    }
    

    public function sellerLogin_process(Request $request)
    {
        $request->validate(
            [
                "email" => "required|email",
                "password" => "required|min:6",
            ]
        );
        $errors = new MessageBag;
        $credentials = $request->only('email', 'password');


        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->route("site.seller.portal")->with('alert-success', 'You are now logged in.');
        }

        $errors = new MessageBag(['password' => ['Email and/or password invalid.']]);

        return Redirect::back()->withErrors($errors);
    }



    public function sellerSignup()
    {
        return view('seller.seller_signup');
    }

    public function sellerSignup_process(Request $request)
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

        $s = new seller();
        $s->name = $request->name;
        $s->phone = $request->phone;
        $s->email = $request->email;
        $s->password = bcrypt($request->password);
        $s->save();

        $request->session()->flash('register_process_done', true);
        return redirect()->route("site.seller.seller_otp");
    }

    public function otpSeller()
    {
        return view('seller.otp_seller_signup');
    }

    public function otpSeller_process(Request $request)
    {
        $request->validate([
            "userotp" => "required"
        ]);

        $user_otp = $request->input('userotp');
        if ($user_otp == "12345") {
            $request->session()->flash('otp_verified', true);
            return redirect()->route("site.seller.seller_login");
        } else {
            echo ("wrong user otp");
        }
    }

    public function SellerPortal(){
        return view('seller.seller_portal');
    }

}