<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function view(){
        return view('dashboard.index',[
            'title' => 'Dashboard',
            'active' => 'active'
        ]);
    }

    public function view2(){
        return view('dashboard.index2',[
            'title' => 'Dashboard',
            'active' => 'active'
        ]);
    }
}
