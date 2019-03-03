<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\shop;
use App\User;
use App\order;

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
        $items = shop::all();
        /* $items = shop::find($id); */
        return view('pages.shop')->with('items',$items);

    }

    public function checkout($items_id){
        /* return $items_id; */
        $item=shop::find($items_id);
        return view('pages.checkout')->with('item',$item);
    }

    public function store(Request $request,$items_id){
        
        $order=new order;
        $order->id_cake=$items_id;
        $order->fname=$request->input('fname');
        $order->lname=$request->input('lname');
        $order->phone=$request->input('phone');
        $order->email=$request->input('email');
        $order->pickupType=$request->input('optradio');
        $order->address=$request->input('address');
        $order->save();
        return redirect('/shop')->with('success', 'Successfully ordered');

    }
}
