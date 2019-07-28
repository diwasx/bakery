<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\shop;
use App\User;
use App\Cart;
use App\order;
use App\cake_sizes;
use Session;

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

    public function cart(){
        if (!Session::has('cart')){
            return view('pages.cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('pages.cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    /* public function getAddToCart(Request $request, $id){ */
    /*     $product = shop::find($id); */
    /*     /1* dd($product->price,$product->id); *1/ */
    /*     $oldCart = Session::has('cart') ? Session::get('cart') : null; */
    /*     $cart = new Cart($oldCart); */
    /*     $cart->add($product, $product->id); */

    /*     $request->session()->put('cart', $cart); */
    /*     /1* dd($request->session()->get('cart')); *1/ */
    /*     return redirect('/shop'); */
    /* } */

    public function getAddToCart(Request $request){
        /* $product = shop::find($id); */
        $product = shop::find($request->input('item-id'));
        $size = $request->input('item-size');
        /* dd($size); */
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id, $size);

        $request->session()->put('cart', $cart);
        return redirect('/shop');
    }


    public function checkout($items_id){
        /* return $items_id; */
        $item=shop::find($items_id);
        $sizes=cake_sizes::where('id_cake', '=', $items_id)->get();
        /* return view('pages.checkout')->with('item',$item); */
        return view('pages.checkout', compact('item','sizes'));
    }

    public function checkoutForm(){
        return view('pages.checkoutForm');
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
