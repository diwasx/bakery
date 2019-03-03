<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\order;
use App\shop;
use DB;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function order()
    {
        $order = order::all();
        
        return view('admin.main')->with('order',$order);
    }

    public function product()
    {
        $shop = shop::all();
        
        return view('admin.product')->with('shop',$shop);
    }

    public function new()
    {
        $shop = shop::all();
        
        return view('admin.productNew')->with('shop',$shop);
    }

    public function store(Request $request)
    {
        /* $shop = shop::all(); */
        $shop=new shop;

        $this->validate($request, [
            'input_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
        ]);

        if ($request->hasFile('input_img')) {
            $id = DB::table('shops')->orderBy('id', 'desc')->first();
            $id=$id->id;
            $id++;
            $image = $request->file('input_img');
            $name = $id.'.jpg';
            $destinationPath = public_path('img');
            $image->move($destinationPath, $name);
        }

        $shop->id=$id;
        $shop->name=$request->input('name');
        $shop->price=$request->input('price');
        $shop->description=$request->input('description');
        $shop->save();
        return redirect('/admin/product')->with('success', 'Successfully added product');
        
    }
}
