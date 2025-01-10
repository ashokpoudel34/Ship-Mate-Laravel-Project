<?php

namespace App\Http\Controllers\SellerWebsite;

use App\Mail\Booking;
use App\Models\Photo;
use App\Models\contact;
use App\Models\Message;
use App\Models\shipmate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
public function HomePage(Request $request){
    $url = $request->path();
    $data = shipmate::where("link", "=", $url)->first();
    $product_data = $data->products;
    $WebsiteTitles = $data->titles;
    $photo = Photo::find($data->id);

    if ($data->theme_id == 0) {
        return view('SellerWebsite.homepage',compact('data','photo','product_data','WebsiteTitles'));
    }

    if ($data->theme_id == 1) {
        return view('SellerWebsite.HexaShop.index',compact('data','photo','product_data'));
    }

    if ($data->theme_id == 2) {
        return view('SellerWebsite.Electric.index',compact('data','photo','product_data'));
    }

    if ($data->theme_id == 3) {
        return view('SellerWebsite.GiftShop.index',compact('data','photo','product_data'));
    }
}


}
