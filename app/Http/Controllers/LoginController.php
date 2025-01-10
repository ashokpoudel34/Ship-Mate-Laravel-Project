<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\seller;
use App\Models\Products;
use App\Models\shipmate;
use App\Mail\MyTestEmail;
use App\Models\WebsiteTitle;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function sellerLogin()
    {
        Auth::logout();
        return view('LoginSignUp.seller_login');
    }

    public function sellerLogin_process(Request $request)
    {
        $request->validate(
            [
                "email" => "required|email",
                "password" => "required|min:6",
            ],
        );
        $errors = new MessageBag;
        $credentials = $request->only('email', 'password');


        if (Auth::guard('shipmate')->attempt($credentials)) {
            // Authentication passed...
            return redirect()->route("site.seller.dashboard");
        }

        $errors = new MessageBag(['err' => ['Email and/or password invalid.']]);

        return Redirect::back()->withErrors($errors);
    }



    public function sellerSignup()
    {
        return view('LoginSignUp.seller_signup');
    }

    public function sellerSignup_process(Request $request)
    {

        $request->validate(
            [
                "name" => "required",
                // "phone" => "required|digits:10",
                "email" => "required|email|unique:seller,email",
                "link" => "required|unique:shipmate,link",
                "password" => "required|min:6",
                // "password_confirmation" => "required|same:password"
            ],
            [
                // "phone.required" => "You forgot your contact No.",
                // "phone.digits" => "This number won't receive OTP.",
                "email.unique" => "This E-mail is already in use.",
                "link.unique" => "This Username is already in use."
            ]
        );

        $name = $request->input('name');
        // $phone = $request->input('phone');
        $email = $request->input('email');
        $link = $request->input('link');
        $password = $request->input('password');

        $otp = rand(100000, 999999);
        $details = [
            'title' => "Hey, $name",
            'otp' => $otp
        ];
        // The email sending is done using method on the Mail facade
        Mail::to($email)->send(new MyTestEmail($details));

        $request->session()->put('seller_data', [
            'name' => $name,
            'email' => $email,
            'link' => $link,
            'otp' => $otp,
            'password' => bcrypt($password)
        ]);

        $request->session()->flash('seller_register_process_done', true);
        return redirect()->route("site.seller.seller_otp");
    }


    public function otpSeller()
    {
        return view('LoginSignUp.seller_otp');
    }


    public function otpSeller_process(Request $request)
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
        $seller_data = $request->session()->get('seller_data');
        $otp = $seller_data['otp'];


        if ($user_otp == $otp) {

            $seller = new seller();
            $seller->name = $seller_data['name'];
            $seller->phone = "null";
            $seller->email = $seller_data['email'];
            $seller->password = $seller_data['password'];
            $seller->save();

            $shipmate = new shipmate();
            $shipmate->theme_id = '0';
            $shipmate->name = $seller_data['name'];
            $shipmate->category = "null";
            $shipmate->mobile = "null";
            $shipmate->country = "null";
            $shipmate->address = "null";
            $shipmate->link = $seller_data['link'];
            $shipmate->email = $seller_data['email'];
            $user = $shipmate->save();

            $photo = new Photo();
            $photo->name = "null";
            $photo->path = "null";
            $photo->save();

            $user = shipmate::where('link', '=', $seller_data['link'])->first();

            $Titles = array (
                array("home","Home","Welcome to ","Delivering great food for more than 18 years!"),
                array("about","About","Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.","Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum"),
                array("menu","Menu","MENU","Check Our Tasty Menu"),
                array("specials","Specials","SPECIALS","Check Our Specials"),
                array("events","Events","EVENTS","Organize Your Events in our Restaurant"),
                array("gallery","Gallery","GALLERY","Some photos from Our Restaurant"),
                array("chefs","Chefs","CHEFS","Our Proffesional Chefs"),
                array("contact","Contact","CONTACT","Contact Us"),
              );

            $i=0;
            while($i<8){
            $WebsiteTitle = new WebsiteTitle;
            $WebsiteTitle->href = $Titles[$i][0];
            $WebsiteTitle->title = $Titles[$i][1];
            $WebsiteTitle->heading = $Titles[$i][2];
            $WebsiteTitle->description = $Titles[$i][3];
            $userr = $user->titles()->save($WebsiteTitle);
            $i++;
            }

            $product = new Products;
            $product->product_name = 'Default';
            $product->product_category = 'test';
            $product->price = '111';
            $product->discounted_price = '111';
            $product->product_unit = '111';
            $product->product_description = 'Default';
            $product->path = 'null';
            $userr = $user->products()->save($product);
            
            

            $request->session()->flash('seller_otp_verified', true);
            return redirect()->route("site.seller.seller_login");
        } else {
            $request->session()->flash('wrong_seller_otp', true);
            return redirect()->route("site.seller.seller_otp");
        }
    }

    public function sellerReset(){

        return view('LoginSignUp.seller_reset');
    }

    public function sellerReset_process(Request $request){
        $request->validate(
            [
                "email" => "required|email|exists:seller,email"
            ],
            [
                "email.exists" => "Email Address Invalid.",
            ]
        );

        $email = $request->input('email');
        $otp = rand(100000, 999999);
        $details = [
            'title' => "Hey, $email",
            'otp' => $otp
        ];
        // The email sending is done using method on the Mail facade
        Mail::to($email)->send(new MyTestEmail($details));

        $request->session()->put('reset_data', [
            'email' => $email,
            'otp' => $otp,
        ]);

        $request->session()->flash('seller_reset_process_done', true);
        return redirect()->route("site.seller.resetotp");

    }

    public function resetotp(){
        return view('LoginSignUp.resetotp');
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

        if ($user_otp == $otp) {
            return redirect()->route("site.seller.resetpassword");
            
        }


    }

    public function resetpassword(){
        return view('LoginSignUp.setpassword');
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
        $data = seller::where("email", "=", $email)->first();
        $data->password = bcrypt($password);
        $data->save();
        $request->session()->flash('reset_otp_verified', true);
        return redirect()->route("site.seller.seller_login");


    }
}
