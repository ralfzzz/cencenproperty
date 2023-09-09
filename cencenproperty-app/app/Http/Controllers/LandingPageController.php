<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function view(){
        return view('landingPage.index');
    }

    public function page(){
        return view('landingPage.product');
    }
}
