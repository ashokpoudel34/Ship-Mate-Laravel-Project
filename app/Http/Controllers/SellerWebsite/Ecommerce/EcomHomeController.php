<?php

namespace App\Http\Controllers\SellerWebsite\Ecommerce;

use App\Models\Photo;
use App\Models\shipmate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EcomHomeController extends Controller
{
    public function HexaShop(Request $request){
        $url = $request->path();
        $data = shipmate::where("link", "=", $url)->first();
        $product_data = $data->products;
        $WebsiteTitles = $data->titles;
        $photo = Photo::find($data->id);
        return view('SellerWebsite.HexaShop.index',compact('data','photo','product_data'));
    }
}
