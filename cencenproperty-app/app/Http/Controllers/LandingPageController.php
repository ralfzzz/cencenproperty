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

    public function post(){
        $id = request()->id;
        $post = Post::where('id', $id)->get();
        return view('landingPage.post',[
            'post' => $post,
        ]);
    }

    public function category(){
        $category = request()->category;
        return view('landingPage.category',[
            'posts' => Post::latest()->where('property_type', $category)->paginate(8),
            'label' => $category
        ]);
    }

    public function all(){
        return view('landingPage.all',[
            'posts' => Post::latest()->paginate(8)

        ]);
    }
}
