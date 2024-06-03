<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HealetController extends Controller
{
    //
    public function home(){
        $title = "Home";
        return view('home', compact('title'));
    }
    public function about(){
        $title = "About";
        return view('about', compact('title'));
    }
    public function blog(){
        $title = "Blog";
        return view('blog', compact('title'));
    }
    public function shop(){
        $title = "Shop";
        return view('shop', compact('title'));
    }
}
