<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class LandingPageController extends Controller
{
    public function view(){
        return view('landingPage.index',[
            'posts' => Post::latest()->take(8)->get()

        ]);
    }

    public function page(){
        return view('landingPage.product');
    }

    public function category(){
        return view('landingPage.kategori');
    }

    public function tes(){
        return view('landingPage.tes');
    }

    public function terbaru(){
        return view('landingPage.terbaru',[
            'posts' => Post::latest()->paginate(8)

        ]);
    }
}
