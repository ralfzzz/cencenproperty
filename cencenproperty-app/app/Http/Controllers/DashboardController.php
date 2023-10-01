<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function view(){
        return view('dashboard.index',[
            'title' => 'Dashboard Upload',
            'posts' => Post::latest()->get()
        ]);
    }

    public function view2(){
        return view('dashboard.index2',[
            'title' => 'Dashboard Edit',
            'posts' => Post::latest()->paginate(8),
            'sell_rent' => 'all'

        ]);
    }

    public function rent(){
        return view('dashboard.index2',[
            'title' => 'Dashboard Edit',
            'posts' => Post::latest()->where('sell_rent', '=', 'Disewa')->paginate(8),
            'sell_rent' => 'Disewa'
        ]);
    }

    public function sell(){
        return view('dashboard.index2',[
            'title' => 'Dashboard Edit',
            'posts' => Post::latest()->where('sell_rent', '=', 'Dijual')->paginate(8),
            'sell_rent' => 'Dijual'
        ]);
    }

    public function search(Request $request){
        if (request('sell_rent_category') == 'Dijual') {
            return view('dashboard.index2',[
                'title' => 'Dashboard Edit',
                'posts' => Post::latest()->filter(request(['search']))->where('sell_rent','=','Dijual')->paginate(8),
                'sell_rent' => 'Dijual'
                
            ]);
        } elseif (request('sell_rent_category') == 'Disewa') {
            return view('dashboard.index2',[
                'title' => 'Dashboard Edit',
                'posts' => Post::latest()->filter(request(['search']))->where('sell_rent','=','Disewa')->paginate(8),
                'sell_rent' => 'Disewa'

            ]);
        } else {
            return view('dashboard.index2',[
                'title' => 'Dashboard Edit',
                'posts' => Post::latest()->filter(request(['search']))->paginate(8),
                'sell_rent' => 'all'
            ]);
        }
    }

    // public function edit(){
    //     return view('dashboard.edit',[
    //         'title' => 'Dashboard',
    //         'active' => 'active'
    //     ]);
    // }
}
