<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\shop;
use App\User;
use App\order;
use App\cake_sizes;

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
        $sizes = cake_sizes::all();
        /* $items = shop::find($id); */
        /* return view('pages.shop')->with('items',$items); */
        return view('pages.shop', compact('items','sizes'));

    }

    public function checkout($items_id){
        /* return $items_id; */
        $item=shop::find($items_id);
        $sizes=cake_sizes::where('id_cake', '=', $items_id)->get();
        /* return view('pages.checkout')->with('item',$item); */
        return view('pages.checkout', compact('item','sizes'));
    }

    public function store(Request $request,$items_id){
        try { 
            $order=new order;
            $order->id_cake=$items_id;
            $order->fname=$request->input('fname');
            $order->lname=$request->input('lname');
            $order->phone=$request->input('phone');
            $order->size=$request->input('size');
            $order->email=$request->input('email');
            $order->pickupType=$request->input('optradio');
            $order->address=$request->input('address');
            $order->remark=$request->input('remark');
            $order->save();
            return redirect('/shop')->with('success', 'Successfully ordered');
            } catch(\Illuminate\Database\QueryException $ex){ 
                dd('Some data you enter is too long. Review your data once more and try using less character!! '.$ex->getMessage()); 
                /* dd($ex->getMessage()); */ 
            }


    }
}
