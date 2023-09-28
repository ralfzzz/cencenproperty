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
            'posts' => Post::latest()->get(),
            'sell_rent' => 'all'

        ]);
    }

    public function rent(){
        return view('dashboard.index2',[
            'title' => 'Dashboard Edit',
            'posts' => Post::latest()->where('sell_rent', '=', 'Disewa')->get(),
            'sell_rent' => 'Rent'
        ]);
    }

    public function sell(){
        return view('dashboard.index2',[
            'title' => 'Dashboard Edit',
            'posts' => Post::latest()->where('sell_rent', '=', 'Dijual')->get(),
            'sell_rent' => 'Sell'
        ]);
    }

    public function search(Request $request){
        if (request('sell_rent_category') == 'Sell') {
            return view('dashboard.index2',[
                'title' => 'Dashboard Edit',
                'posts' => Post::latest()->filter(request(['search']))->where('sell_rent','=','Dijual')->get(),
                'sell_rent' => 'Sell'
                
            ]);
        } elseif (request('sell_rent_category') == 'Rent') {
            return view('dashboard.index2',[
                'title' => 'Dashboard Edit',
                'posts' => Post::latest()->filter(request(['search']))->where('sell_rent','=','Disewa')->get(),
                'sell_rent' => 'Rent'

            ]);
        } else {
            return view('dashboard.index2',[
                'title' => 'Dashboard Edit',
                'posts' => Post::latest()->filter(request(['search']))->get(),
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
