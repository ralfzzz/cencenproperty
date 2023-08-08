<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function view(){
        return view('dashboard.index',[
            'title' => 'Dashboard Upload',
        ]);
    }

    public function view2(){
        return view('dashboard.index2',[
            'title' => 'Dashboard Edit',
            'posts' => Post::latest()->get()
        ]);
    }

    public function rent(){
        return view('dashboard.index2',[
            'title' => 'Dashboard Edit',
            'posts' => Post::latest()->where('sell_rent', '=', 'Rent')->get()
        ]);
    }

    public function sell(){
        return view('dashboard.index2',[
            'title' => 'Dashboard Edit',
            'posts' => Post::latest()->where('sell_rent', '=', 'Sell')->get()
        ]);
    }

    public function search(){
        return view('dashboard.index2',[
            'title' => 'Dashboard Edit',
            'posts' => Post::latest()->filter(request(['search']))->get()
        ]);
    }

    // public function edit(){
    //     return view('dashboard.edit',[
    //         'title' => 'Dashboard',
    //         'active' => 'active'
    //     ]);
    // }
}
