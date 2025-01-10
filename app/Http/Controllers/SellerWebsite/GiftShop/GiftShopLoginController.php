<?php

namespace App\Http\Controllers\SellerWebsite\GiftShop;

use App\Models\Photo;
use App\Models\Giftshop;
use App\Models\shipmate;
use App\Mail\MyTestEmail;
use App\Models\WebsiteTitle;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class GiftShopLoginController extends Controller
{
    public function Login(Request $request)
    {
        Auth::guard('giftshop')->logout();
        $url = $request->path();
        $url = substr($url, 0, strpos($url, "/")); 
        $data = shipmate::where("link", "=", $url)->first();
        $product_data = $data->products;
        $WebsiteTitles = $data->titles;
        $photo = Photo::find($data->id);
        return view('SellerWebsite.GiftShop.login',compact('data','photo','product_data'));
    }

    public function Login_process(Request $request)
    {
        $request->validate(
            [
                "email" => "required|email",
                "password" => "required|min:6",
            ],
        );
        $errors = new MessageBag;
        $credentials = $request->only('email', 'password');
        $url = $request->path();
        $url = substr($url, 0, strpos($url, "/")); 
        $data = shipmate::where("link", "=", $url)->first();

        $users = $data->giftshopusers;

        // dd(Auth::);
        // dd($users);
        // dd($credentials['password']);
foreach($users as $user){
    // echo(Hash::check( $credentials['password'],$user->password));
    // echo($credentials['email']);
    // echo($user->email);
    // dd($user);
        // dd(!($user->email == $credentials['email']));
        // dd($user->email == $credentials['email']);

    if (($user->email == $credentials['email']) && Hash::check( $credentials['password'],$user->password) ){
        Auth::guard('giftshop')->loginUsingId($user->id);
            // Authentication passed...
            // dd('Authencated');
            return redirect()->route($url . "giftshop.dashboard");
        
    }
}
        // if (Auth::guard('shipmate')->giftshopusers()->attempt($credentials)) {



        $errors = new MessageBag(['err' => ['Email and/or password invalid.']]);

        return Redirect::back()->withErrors($errors);
    }



    public function Signup(Request $request)
    {
        $url = $request->path();
        $url = substr($url, 0, strpos($url, "/")); 
        $data = shipmate::where("link", "=", $url)->first();
        $product_data = $data->products;
        $WebsiteTitles = $data->titles;
        $photo = Photo::find($data->id);
        return view('SellerWebsite.GiftShop.signup',compact('data','photo','product_data'));
    }

    public function Signup_process(Request $request)
    {

        $request->validate(
            [
                "name" => "required",
                "phone" => "required|digits:10",
                "email" => "required|email",
                "password" => "required|min:6",
                "password_confirmation" => "required|same:password"
            ],
            [
                "phone.required" => "You forgot your contact No.",
                "phone.digits" => "This number won't receive OTP.",
            ]
        );

        $name = $request->input('name');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $password = $request->input('password');
        $url = $request->path();
        $url = substr($url, 0, strpos($url, "/")); 

        $otp = rand(100000, 999999);
        $details = [
            'title' => "Hey, $name",
            'otp' => $otp
        ];

        $data = shipmate::where("link", "=", $url)->first();
        $users = Giftshop::where("shipmate_id", "=", $data->id)->get()->pluck('email')->toArray();
        // dd($users);
        // dd(in_array($email,$users));

            if (!in_array($email,$users)){
                 // The email sending is done using method on the Mail facade
                 Mail::to($email)->send(new MyTestEmail($details));

                    $request->session()->put('signup_data', [
                        'name' => $name,
                        'email' => $email,
                        'otp' => $otp,
                        'password' => bcrypt($password)
                    ]);
        $request->session()->flash('seller_register_process_done', true);
        return redirect()->route($url . "giftshop.otp");
            }

    $errors = new MessageBag(['err' => ['Account Already Exists.']]);
    return Redirect::back()->withErrors($errors);

    }

    public function otp(Request $request)
    {
        $url = $request->path();
        $url = substr($url, 0, strpos($url, "/")); 
        $data = shipmate::where("link", "=", $url)->first();
        $product_data = $data->products;
        $WebsiteTitles = $data->titles;
        $photo = Photo::find($data->id);
        return view('SellerWebsite.GiftShop.otp',compact('data','photo','product_data'));
    }


    public function otp_process(Request $request)
    {
        $request->validate(
            [
                "userotp" => "required"
            ],
            [
                "userotp.required" => "Enter valid OTP."
            ]
        );

        $user_otp = $request->input('userotp');
        $signup_data = $request->session()->get('signup_data');
        $otp = $signup_data['otp'];
        $url = $request->path();
        $url = substr($url, 0, strpos($url, "/")); 


        if ($user_otp == $otp) {
            $shipmateuser = shipmate::where("link", "=", $url)->first();
            $data = new Giftshop();
            $data->name = $signup_data['name'];
            $data->phone = "null";
            $data->email = $signup_data['email'];
            $data->password = $signup_data['password'];
            $user = $shipmateuser->giftshopusers()->save($data);

            $request->session()->flash('seller_otp_verified', true);
            return redirect()->route($url ."giftshop.login");
        } else {
            $request->session()->flash('wrong_seller_otp', true);
            return redirect()->route("giftshop.otp");
        }
    }

    public function Reset(Request $request){
        $url = $request->path();
        $url = substr($url, 0, strpos($url, "/")); 
        $data = shipmate::where("link", "=", $url)->first();
        $product_data = $data->products;
        $WebsiteTitles = $data->titles;
        $photo = Photo::find($data->id);

        return view('SellerWebsite.GiftShop.reset',compact('data','photo','product_data'));
    }

    public function Reset_process(Request $request){
        $request->validate(
            [
                "email" => "required|email|exists:giftshop,email"
            ],
            [
                "email.exists" => "Email Address Invalid.",
            ]
        );
        $errors = new MessageBag;
        $email = $request->input('email');
        $otp = rand(100000, 999999);
        $url = $request->path();
        $url = substr($url, 0, strpos($url, "/")); 
        $details = [
            'title' => "Hey, $email",
            'otp' => $otp
        ];
        $data = shipmate::where("link", "=", $url)->first();
        $users = Giftshop::where("shipmate_id", "=", $data->id)->get()->pluck('email')->toArray();


            if (in_array($email,$users)){

            // The email sending is done using method on the Mail facade
                Mail::to($email)->send(new MyTestEmail($details));
                $request->session()->put('reset_data', [
                    'email' => $email,
                    'otp' => $otp,
                ]);

            $request->session()->flash('seller_reset_process_done', true);
            return redirect()->route($url . "giftshop.resetotp");
            }

        $errors = new MessageBag(['err' => ['Email Address is invalid.']]);

        return Redirect::back()->withErrors($errors);

    }


    public function resetotp(Request $request){
        $url = $request->path();
        $url = substr($url, 0, strpos($url, "/")); 
        $data = shipmate::where("link", "=", $url)->first();
        $product_data = $data->products;
        $WebsiteTitles = $data->titles;
        $photo = Photo::find($data->id);
        return view('SellerWebsite.GiftShop.resetotp',compact('data','photo','product_data'));
    }

    public function resetotp_process(Request $request){
        $request->validate(
            [
                "userotp" => "required"
            ],
            [
                "userotp.required" => "Enter valid OTP."
            ]
        );

        $user_otp = $request->input('userotp');
        $reset_data = $request->session()->get('reset_data');
        $otp = $reset_data['otp'];
        $url = $request->path();
        $url = substr($url, 0, strpos($url, "/")); 

        if ($user_otp == $otp) {
            return redirect()->route($url . "giftshop.resetpassword");
            
        }


    }

    public function resetpassword(Request $request){
        $url = $request->path();
        $url = substr($url, 0, strpos($url, "/")); 
        $data = shipmate::where("link", "=", $url)->first();
        $product_data = $data->products;
        $WebsiteTitles = $data->titles;
        $photo = Photo::find($data->id);
        return view('SellerWebsite.GiftShop.setpassword',compact('data','photo','product_data'));
    }

    public function resetpassword_process(Request $request){
        $request->validate(
            [
                "password" => "required|min:6",
                "password_confirmation" => "required|same:password"
            ],
            [
                "password_confirmation.same" => "Enter Same Password."
            ]
        );
        $password = $request->input('password');
        $reset_data = $request->session()->get('reset_data');
        $email = $reset_data['email'];
        $data = Giftshop::where("email", "=", $email)->first();
        $data->password = bcrypt($password);
        $data->save();
        $url = $request->path();
        $url = substr($url, 0, strpos($url, "/")); 
        $request->session()->flash('reset_otp_verified', true);
        return redirect()->route($url . "giftshop.login");


    }


}
