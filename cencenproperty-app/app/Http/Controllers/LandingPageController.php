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

    public function category(){
        return view('landingPage.category');
    }

    public function tes(){
        return view('landingPage.tes');
    }
}