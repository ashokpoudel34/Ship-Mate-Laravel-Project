<?php

namespace App\Http\Controllers\SellerWebsite\Electric;

use App\Models\Photo;
use App\Models\shipmate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ElecHomeController extends Controller
{
    public function ElecShop(Request $request){
        $url = $request->path();
        $data = shipmate::where("link", "=", $url)->first();
        $product_data = $data->products;
        $WebsiteTitles = $data->titles;
        $photo = Photo::find($data->id);
        return view('SellerWebsite.Electric.index',compact('data','photo','product_data'));
    }
}
