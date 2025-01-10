<?php

namespace App\Http\Controllers\SellerWebsite\GiftShop;

use App\Models\Photo;
use App\Models\Giftshop;
use App\Models\shipmate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class GiftShopHomeController extends Controller
{
    public function Dashboard(Request $request){
        $url = $request->path();
        $url = substr($url, 0, strpos($url, "/")); 
        $id = Auth::user()->id;
        $data = shipmate::where("link", "=", $url)->first();
        // $giftshopdata = Giftshop::where("id", "=", $id)->first();
        
        $giftshopdata = Giftshop::where([
            'id' => $id,
            'shipmate_id' => $data->id
     ])->first();
 
if($giftshopdata){
    $product_data = $data->products;
    $WebsiteTitles = $data->titles;
    $photo = Photo::find($data->id);
    return view('SellerWebsite.GiftShop.dashboard',compact('data','photo','product_data','giftshopdata'));
}
        return redirect()->route($url . "giftshop.login");

    }

    public function About(Request $request){
        $url = $request->path();
        $url = substr($url, 0, strpos($url, "/")); 
        $data = shipmate::where("link", "=", $url)->first();
        $product_data = $data->products;
        $WebsiteTitles = $data->titles;
        $photo = Photo::find($data->id);
        return view('SellerWebsite.GiftShop.about',compact('data','photo','product_data'));
    }

    public function Contact(Request $request){
        $url = $request->path();
        $url = substr($url, 0, strpos($url, "/")); 
        $data = shipmate::where("link", "=", $url)->first();
        $product_data = $data->products;
        $WebsiteTitles = $data->titles;
        $photo = Photo::find($data->id);
        return view('SellerWebsite.GiftShop.contact',compact('data','photo','product_data'));
    }

    public function Product(Request $request){
        $url = $request->path();
        $url = substr($url, 0, strpos($url, "/")); 
        $data = shipmate::where("link", "=", $url)->first();
        $product_data = $data->products;
        $WebsiteTitles = $data->titles;
        $photo = Photo::find($data->id);
        return view('SellerWebsite.GiftShop.product',compact('data','photo','product_data'));
    }

    public function Detail(Request $request){
        $url = $request->path();
        $url = substr($url, 0, strpos($url, "/")); 
        $data = shipmate::where("link", "=", $url)->first();
        $product_data = $data->products;
        $WebsiteTitles = $data->titles;
        $photo = Photo::find($data->id);
        return view('SellerWebsite.GiftShop.detail',compact('data','photo','product_data'));
    }

    public function Cart(Request $request){
        $url = $request->path();
        $url = substr($url, 0, strpos($url, "/")); 
        $data = shipmate::where("link", "=", $url)->first();
        $product_data = $data->products;
        $WebsiteTitles = $data->titles;
        $photo = Photo::find($data->id);
        return view('SellerWebsite.GiftShop.cart',compact('data','photo','product_data'));
    }


}
