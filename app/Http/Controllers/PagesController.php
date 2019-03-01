<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title= 'Welcome to Bakery';
        return view('pages.index')->with('title', $title);
    }


    public function HOL(){
        return view('pages.HOL');
    }

    public function menus(){
        return view('pages.menus');
    }

    public function about(){
        return view('pages.about');
    }

    public function shop(){
        return view('pages.shop');
    }
}
