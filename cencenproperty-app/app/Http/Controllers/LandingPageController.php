<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class LandingPageController extends Controller
{
    public function view(){
        return view('landingPage.index',[
            'posts' => Post::latest()->take(8)->get(),
            'datas' => Post::groupBy('property_type')->get(),
            'category' => 'all'

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
            'posts' => Post::latest()->paginate(8),
            'category' => 'all'

        ]);
    }

    public function search(Request $request){
        $category = request('category');
        if (request('category') == 'Apartemen') {
            return view('landingpage.category',[
                'title' => 'Dashboard Edit',
                'posts' => Post::latest()->filter(request(['search']))->where('property_type','=',$category)->paginate(8),
                'label' => $category
                
            ]);
        } elseif (request('category') == 'Rumah') {
            return view('landingpage.category',[
                'title' => 'Dashboard Edit',
                'posts' => Post::latest()->filter(request(['search']))->where('property_type','=',$category)->paginate(8),
                'label' => $category

            ]);
        } elseif (request('category') == 'Ruko') {
            return view('landingpage.category',[
                'title' => 'Dashboard Edit',
                'posts' => Post::latest()->filter(request(['search']))->where('property_type','=',$category)->paginate(8),
                'label' => $category

            ]);
        } elseif (request('category') == 'Kos') {
            return view('landingpage.category',[
                'title' => 'Dashboard Edit',
                'posts' => Post::latest()->filter(request(['search']))->where('property_type','=',$category)->paginate(8),
                'label' => $category

            ]);
        } elseif (request('category') == 'Kios') {
            return view('landingpage.category',[
                'title' => 'Dashboard Edit',
                'posts' => Post::latest()->filter(request(['search']))->where('property_type','=',$category)->paginate(8),
                'label' => $category

            ]);
        } elseif (request('category') == 'Tanah') {
            return view('landingpage.category',[
                'title' => 'Dashboard Edit',
                'posts' => Post::latest()->filter(request(['search']))->where('property_type','=',$category)->paginate(8),
                'label' => $category

            ]);
        } elseif (request('category') == 'Kantor') {
            return view('landingpage.category',[
                'title' => 'Dashboard Edit',
                'posts' => Post::latest()->filter(request(['search']))->where('property_type','=',$category)->paginate(8),
                'label' => $category

            ]);
        } else {
            return view('landingpage.all',[
                'title' => 'Dashboard Edit',
                'posts' => Post::latest()->filter(request(['search']))->paginate(8),
                'category' => 'all'
            ]);
        }
    }
}
