<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    public function home_main()
    {
        return view('HomePage.common_home');
    }

    
}