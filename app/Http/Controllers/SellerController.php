<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Photo;
use App\Models\Products;
use App\Models\shipmate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;


class SellerController extends Controller
{

    // SELLER PORTAL->DASHBOARD 
    public function SellerDashboard()
    {
        $id = Auth::user()->id;
        $data = shipmate::find($id);
        $photo = Photo::find($id);
        $notifications = $data->notifications;
        $messages = $data->messages;
        $time = Carbon::now();
        return view('seller.dashboard.portal_dashboard',compact('data','photo','notifications','messages','time'));
    }

    // SELLER PORTAL ORDERS
    public function SellerOrder()
    {
        $id = Auth::user()->id;
        $data = shipmate::find($id);
        $photo = Photo::find($id);
        $notifications = $data->notifications;
        $messages = $data->messages;
        $time = Carbon::now();
        return view('seller.orders.portal_order',compact('data','photo','notifications','messages','time'));
    }

    public function SellerOrder1()
    {
        $id = Auth::user()->id;
        $data = shipmate::find($id);
        $photo = Photo::find($id);
        $notifications = $data->notifications;
        $messages = $data->messages;
        $time = Carbon::now();
        return view('seller.orders.portal_order1',compact('data','photo','notifications','messages','time'));
    }

    // SELLER PORTAL DELIVERY
    public function SellerDelivery()
    {
        $id = Auth::user()->id;
        $data = shipmate::find($id);
        $photo = Photo::find($id);
        $notifications = $data->notifications;
        $messages = $data->messages;
        $time = Carbon::now();
        return view('seller.delivery.portal_delivery',compact('data','photo','notifications','messages','time'));
    }

    // SELLER PORTAL--> APPREANCE
    public function sellerThemes()
    {
        $id = Auth::user()->id;
        $data = shipmate::find($id);
        $photo = Photo::find($id);
        $notifications = $data->notifications;
        $messages = $data->messages;
        $time = Carbon::now();
        return view('seller.appreance.portal_themes',compact('data','photo','notifications','messages','time'));
    }
    public function sellerPages()
    {
        $id = Auth::user()->id;
        $data = shipmate::find($id);
        $photo = Photo::find($id);
        $notifications = $data->notifications;
        $messages = $data->messages;
        $time = Carbon::now();
        return view('seller.appreance.portal_pages',compact('data','photo','notifications','messages','time'));
    }
    public function sellerMenu()
    {
        $id = Auth::user()->id;
        $data = shipmate::find($id);
        $photo = Photo::find($id);
        $notifications = $data->notifications;
        $messages = $data->messages;
        $WebsiteTitles = $data->titles;
        $time = Carbon::now();
        return view('seller.appreance.portal_menu',compact('data','WebsiteTitles','photo','notifications','messages','time'));
    }
    public function sellerBlog()
    {
        $id = Auth::user()->id;
        $data = shipmate::find($id);
        $photo = Photo::find($id);
        $notifications = $data->notifications;
        $messages = $data->messages;
        $time = Carbon::now();
        return view('seller.appreance.portal_blog',compact('data','photo','notifications','messages','time'));
    }

    // SELLER PORTAL->PRODUCTS
    
    public function AllProduct()
    {
        $id = Auth::user()->id;
        $data = shipmate::find($id);
        $product_data = $data->products;
        $photo = Photo::find($id);
        $notifications = $data->notifications;
        $messages = $data->messages;
        $time = Carbon::now();
        return view('seller.products.portal_products',compact('data','product_data','photo','notifications','messages','time'));
    }

    public function ProductUpload()
    {
        $id = Auth::user()->id;
        $data = shipmate::find($id);
        $photo = Photo::find($id);
        $notifications = $data->notifications;
        $messages = $data->messages;
        $time = Carbon::now();
        return view('seller.products.portal_add_products',compact('data','photo','notifications','messages','time'));
    }

    public function ProductUploadProcess(Request $request)
    {

        $request->validate(
            [
                "product_name" => "required",
                "product_category" => "required",
                "price" => "required",
                "discounted_price" => "required",
                "product_unit" => "required",
                "product_description" => "required|min:10",
                "product_image" => "image|mimes:jpg,png,jpeg,gif,svg|max:2048"
            ],
            [
                "product_name.required" => "Please enter name of product",
                "product_description.min" => "Minimum 10 characters required"
            ]
        );
        $product_name = $request->input('product_name');
        $product_category = $request->input('product_category');
        $price = $request->input('price');
        $discounted_price = $request->input('discounted_price');
        $product_unit = $request->input('product_unit');
        $product_description = $request->input('product_description');

       $product_image = $request->file('product_image')->getClientOriginalName();
       $path = $request->file('product_image')->store('public/images/products');
 
        $id = Auth::user()->id;
        $user = shipmate::find($id);
        $product = new Products;
        $product->product_name = $product_name;
        $product->product_category = $product_category;
        $product->price = $price;
        $product->discounted_price = $discounted_price;
        $product->product_unit = $product_unit;
        $product->product_description = $product_description;
        $product->path = $path;
        $user = $user->products()->save($product);
        
        

        //return redirect()->back()->with('alert-success', 'Product Uploaded succesfully! ');
        return redirect()->route("site.seller.allproducts")->with('alert-success', 'Product Uploaded succesfully! ');
    }
    

    public function sellerCategories()
    {
        $id = Auth::user()->id;
        $data = shipmate::find($id);
        $photo = Photo::find($id);
        $notifications = $data->notifications;
        $messages = $data->messages;
        $time = Carbon::now();
        return view('seller.products.portal_categories',compact('data','photo','notifications','messages','time'));
    }

    public function sellerInventory()
    {
        $id = Auth::user()->id;
        $data = shipmate::find($id);
        $photo = Photo::find($id);
        $notifications = $data->notifications;
        $messages = $data->messages;
        $time = Carbon::now();
        return view('seller.products.portal_inventory',compact('data','photo','notifications','messages','time'));
    }

    //SELLER_PORTAL ANALYTICS
    public function Sales()
    {
        $id = Auth::user()->id;
        $data = shipmate::find($id);
        $photo = Photo::find($id);
        $notifications = $data->notifications;
        $messages = $data->messages;
        $time = Carbon::now();
        return view('seller.analytics.portal_sales',compact('data','photo','notifications','messages','time'));
    }

    public function Traffic()
    {
        $id = Auth::user()->id;
        $data = shipmate::find($id);
        $photo = Photo::find($id);
        $notifications = $data->notifications;
        $messages = $data->messages;
        $time = Carbon::now();
        return view('seller.analytics.portal_traffic',compact('data','photo','notifications','messages','time'));
    }

    public function Product()
    {
        $id = Auth::user()->id;
        $data = shipmate::find($id);
        $photo = Photo::find($id);
        $notifications = $data->notifications;
        $messages = $data->messages;
        $time = Carbon::now();
        return view('seller.analytics.portal_product',compact('data','photo','notifications','messages','time'));
    }


    //SELLER_PORTAL CUSTOMER
    public function Customer()
    {
        $id = Auth::user()->id;
        $data = shipmate::find($id);
        $photo = Photo::find($id);
        $notifications = $data->notifications;
        $messages = $data->messages;
        $time = Carbon::now();
        return view('seller.customer.portal_customer',compact('data','photo','notifications','messages','time'));
    }

    //SELLER_PORTAL PAYMENT
    public function Payment()
    {
        $id = Auth::user()->id;
        $data = shipmate::find($id);
        $photo = Photo::find($id);
        $notifications = $data->notifications;
        $messages = $data->messages;
        $time = Carbon::now();
        return view('seller.payouts.portal_payment',compact('data','photo','notifications','messages','time'));
    }

    //HEADER --> MY PROFILE
    public function MyProfile(){
        // $data = shipmate::where('id', '1')->get();
        $id = Auth::user()->id;
        $data = shipmate::find($id);
        $photo = Photo::find($id);
        $notifications = $data->notifications;
        $messages = $data->messages;
        $time = Carbon::now();

        return view('seller.HeaderFiles.myprofile',compact('data','photo','notifications','messages','time'));
    }


    public function EditProfile(Request $request)
    {
        $id = Auth::user()->id;
        $request->validate(
            [
                "name" => "required",
                "category" => "required",
                "mobile" => "required|digits:10",
                "country"=> "required",
                "address"=> "required",
                "link"=> 'required|unique:shipmate,link,'.$id,
                "email" => "required|email",
                'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048'
            ],
            [
                "mobile.required" => "Please Enter Phone Number",
                "mobile.digits" => "Please Enter valid Number.",
                "link.unique" => "The Store Link is already in use."
            ]
        );

        $name = $request->input('name');
        $category = $request->input('category');
        $mobile = $request->input('mobile');
        $country = $request->input('country');
        $address = $request->input('address');
        $link = $request->input('link');
        $email = $request->input('email');

        $photoname = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->store('public/images');
 
        $photo = Photo::find($id);
        $file =public_path("storage/{$photo -> path}");
        File::delete($file);
        
        $photo->name = $photoname;
        $photo->path = $path;
        $photo->save();

        $shipmate = shipmate::find($id);
        $shipmate->name = $name;
        $shipmate->category = $category;
        $shipmate->mobile = $mobile;
        $shipmate->country = $country;
        $shipmate->address = $address;
        $shipmate->link = $link;
        $shipmate->email = $email;
        $shipmate->save();

        return redirect()->back()->with('alert-success', 'Changes saved succesfully! ');
    }



}