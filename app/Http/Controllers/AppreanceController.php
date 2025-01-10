<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Photo;
use App\Models\shipmate;
use App\Models\WebsiteTitle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AppreanceController extends Controller
{

    public function ThemeApply($theme_id){
        $id = Auth::user()->id;
        // $data = shipmate::find($id);
        // $photo = Photo::find($id);
        // $notifications = $data->notifications;
        // $messages = $data->messages;
        // $time = Carbon::now();

    $shipmate = shipmate::find($id);
    $shipmate->theme_id = $theme_id;
    $shipmate->save();
        return redirect()->back();
    }


    public function sellerMenuAdd(){
        $id = Auth::user()->id;
        $data = shipmate::find($id);
        $photo = Photo::find($id);
        $notifications = $data->notifications;
        $messages = $data->messages;
        $time = Carbon::now();
        return view('seller.appreance.portal_menu_add',compact('data','photo','notifications','messages','time'));
    }

    public function MenuAddProcess(Request $request)
    {

        $request->validate(
            [
                "title" => "required",
                "heading" => "required",
                "description" => "required|min:10",
            ],
            [
                "title.required" => "Please enter title",
                "description.min" => "Minimum 10 characters required"
            ]
        );
        $title = $request->input('title');
        $heading = $request->input('heading');
        $description = $request->input('description');
 
        $id = Auth::user()->id;
        $user = shipmate::find($id);
        $WebsiteTitle = new WebsiteTitle;
        $WebsiteTitle->href = "oops";
        $WebsiteTitle->title = $title;
        $WebsiteTitle->heading = $heading;
        $WebsiteTitle->description = $description;
        $user = $user->titles()->save($WebsiteTitle);
        
        

        //return redirect()->back()->with('alert-success', 'Menu Added succesfully! ');
        return redirect()->route("site.seller.menu")->with('alert-success', 'Menu '.$WebsiteTitle->title. ' Edited succesfully! ');
    }

    public function sellerMenuEdit($id_menu)
{

    $id = Auth::user()->id;
    $data = shipmate::find($id);
    $photo = Photo::find($id);
    $notifications = $data->notifications;
    $messages = $data->messages;
    $WebsiteTitles = WebsiteTitle::find($id_menu);
    $time = Carbon::now();
    return view('seller.appreance.portal_menu_edit',compact('data','WebsiteTitles','photo','notifications','messages','time'));

}

public function sellerMenuEditProcess($id, Request $request)
{

    $request->validate(
        [
            "title" => "required",
            "heading" => "required",
            "description" => "required|min:10",
        ],
        [
            "title.required" => "Please enter title",
            "description.min" => "Minimum 10 characters required"
        ]
    );
    $title = $request->input('title');
    $heading = $request->input('heading');
    $description = $request->input('description');

    $WebsiteTitle = WebsiteTitle::find($id);
    $WebsiteTitle->title = $title;
    $WebsiteTitle->heading = $heading;
    $WebsiteTitle->description = $description;
    $WebsiteTitle->save();
    
    

    //return redirect()->back()->with('alert-success', 'Menu Added succesfully! ');
    return redirect()->route("site.seller.menu")->with('alert-success', 'Menu Added succesfully! ');
}

public function sellerMenuDestroy($id)
{
    WebsiteTitle::where('id', $id)->delete();

    return redirect()->back();
}
    
}
