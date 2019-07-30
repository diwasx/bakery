<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\shop;
use App\User;
use App\Cart;
use App\order;
use App\cake_sizes;
use App\cartSystem;
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

    public function deleteFromCart(Request $request, $fullId){
        $cart = Session::get('cart');
        $cart->delete($fullId);
        return redirect('/cart');
    }

    public function changeQty(Request $request, $fullId, $key){
        $cart = Session::get('cart');
        $tmp = explode("-", $fullId);
        $item_id = $tmp[0];
        $size = $tmp[1];
        /* dd($item_id); */
        $product = shop::find($item_id);
        /* dd($fullId, $key); */
        $cart->change($fullId, $key, $product, $size);
        return redirect('/cart');
    }

    public function checkoutForm(){
        $cart = Session::get('cart');
        /* dd($cart); */
        /* $encoded = json_encode($cart); */
        /* dd($encoded); */
        return view('pages.checkoutForm');
    }
    public function cartStore(){
        $cart = Session::get('cart');
        $test['token'] = time();
        $test['data'] = json_encode($cart);
        cartSystem::insert($test);
        /* return redirect('/order_cart'); */
    }

    public function store(Request $request){
        try { 
            $order=new order;
            $order->fname=$request->input('fname');
            $order->lname=$request->input('lname');
            $order->phone=$request->input('phone');
            $order->email=$request->input('email');
            $order->pickupType=$request->input('optradio');
            $order->address=$request->input('address');
            $order->remark=$request->input('remark');
            $order->save();
            $this->cartStore();
            return redirect('/shop')->with('success', 'Successfully ordered');
            } catch(\Illuminate\Database\QueryException $ex){ 
                dd('Some data you enter is too long. Review your data once more and try using less character!! '.$ex->getMessage()); 
                /* dd($ex->getMessage()); */ 
            }
    }
}
