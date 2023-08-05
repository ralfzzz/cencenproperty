<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function view(){
        return view('dashboard.index',[
            'title' => 'Dashboard Upload',
            'active' => 'active'
        ]);
    }

    public function view2(){
        return view('dashboard.index2',[
            'title' => 'Dashboard Edit',
            'active' => 'active',
            'posts' => Post::latest()->get()
        ]);
    }

    // public function edit(){
    //     return view('dashboard.edit',[
    //         'title' => 'Dashboard',
    //         'active' => 'active'
    //     ]);
    // }
}
