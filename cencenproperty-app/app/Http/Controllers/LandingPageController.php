<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class LandingPageController extends Controller
{
    public function view(){
        return view('landingPage.index',[
            'posts' => Post::latest()->take(8)->get(),
            'property' => Post::groupBy('property_type')->get(),
            'furniture' => Post::groupBy('furniture_electronics')->get(),
            'datas' => Post::get(),
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
            'posts' => Post::latest()->where('property_type', $category)->paginate(12),
            'label' => $category
        ]);
    }

    public function all(){
        return view('landingPage.all',[
            'posts' => Post::latest()->paginate(12),
            'category' => 'all'

        ]);
    }

    public function search(Request $request){
        $category = request('category');
        if (request('category') == 'Apartemen') {
            return view('landingPage.category',[
                'title' => 'Dashboard Edit',
                'posts' => Post::latest()->filter(request(['search']))->where('property_type','=',$category)->paginate(8),
                'label' => $category
                
            ]);
        } elseif (request('category') == 'Rumah') {
            return view('landingPage.category',[
                'title' => 'Dashboard Edit',
                'posts' => Post::latest()->filter(request(['search']))->where('property_type','=',$category)->paginate(8),
                'label' => $category

            ]);
        } elseif (request('category') == 'Ruko') {
            return view('landingPage.category',[
                'title' => 'Dashboard Edit',
                'posts' => Post::latest()->filter(request(['search']))->where('property_type','=',$category)->paginate(8),
                'label' => $category

            ]);
        } elseif (request('category') == 'Kos') {
            return view('landingPage.category',[
                'title' => 'Dashboard Edit',
                'posts' => Post::latest()->filter(request(['search']))->where('property_type','=',$category)->paginate(8),
                'label' => $category

            ]);
        } elseif (request('category') == 'Kios') {
            return view('landingPage.category',[
                'title' => 'Dashboard Edit',
                'posts' => Post::latest()->filter(request(['search']))->where('property_type','=',$category)->paginate(8),
                'label' => $category

            ]);
        } elseif (request('category') == 'Tanah') {
            return view('landingPage.category',[
                'title' => 'Dashboard Edit',
                'posts' => Post::latest()->filter(request(['search']))->where('property_type','=',$category)->paginate(8),
                'label' => $category

            ]);
        } elseif (request('category') == 'Kantor') {
            return view('landingPage.category',[
                'title' => 'Dashboard Edit',
                'posts' => Post::latest()->filter(request(['search']))->where('property_type','=',$category)->paginate(8),
                'label' => $category

            ]);
        } else {
            return view('landingPage.all',[
                // @dd(Post::latest()->filter(request(['search']))->get());
                'title' => 'Dashboard Edit',
                'posts' => Post::latest()->filter(request(['search']))->paginate(12),
                'category' => 'all'
            ]);
        }
    }

    public function searchAll(Request $request){
            // @dd(Post::latest()->filterAll([$request])->get());
            $type=$request['type'];
            $sewa_beli=$request['sewa_beli'];
            if ($type==null && $sewa_beli==null) {
                return view('landingPage.all',[
                    'title' => 'Dashboard Edit',
                    'posts' => Post::latest()->filterAll([$request])->paginate(12)->withQueryString(),
                    'category' => "all" 
                ]);
            } elseif ($type==null && $sewa_beli!==null) {
                return view('landingPage.all',[
                    'title' => 'Dashboard Edit',
                    'posts' => Post::latest()->filterAll([$request])->where('sell_rent','=',$sewa_beli)->paginate(12)->withQueryString(),
                    'category' => "all"
                    
                ]);
            } elseif ($sewa_beli==null && $type!==null) {
                return view('landingPage.all',[
                    'title' => 'Dashboard Edit',
                    'posts' => Post::latest()->filterAll([$request])->where('property_type','=',$type)->paginate(12)->withQueryString(),
                    'category' => "all"
                ]);
            } else {
                return view('landingPage.all',[
                    'title' => 'Dashboard Edit',
                    'posts' => Post::latest()->filterAll([$request])->where('property_type','=',$type)->where('sell_rent','=',$sewa_beli)->paginate(12)->withQueryString(),
                    'category' => "all"
                    
                ]);
            }
    }
}
