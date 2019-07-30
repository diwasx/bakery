<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\order;
use App\orderFail;
use App\orderSuccess;
use App\shop;
use App\cake_sizes;
use App\cartSystem;
use DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

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
    public function orderS()
    {
        $order = orderSuccess::all();
        
        return view('admin.orderSuccess')->with('order',$order);
    }
    public function orderF()
    {
        $order = orderFail::all();
        
        return view('admin.orderFail')->with('order',$order);
    }


    public function orderSuccess($id_order)
    {
        $member=order::where('id_order', '=', $id_order)->firstOrFail();
        $post = new orderSuccess;
        $post->id_order = $member['id_order'];
        $post->fname = $member['fname'];
        $post->lname = $member['lname'];
        $post->phone = $member['phone'];
        $post->email = $member['email'];
        $post->pickupType = $member['pickupType'];
        $post->address = $member['address'];
        $post->remark = $member['remark'];
        $post->save();
        
        $member::where('id_order', '=', $id_order)->delete();
        /* This is the use of elloquent laravel with the help of model */
        return redirect('/admin/order')->with('success', 'Order transferred to success');
    }

    public function orderFail($id_order)
    {
        $member=order::where('id_order', '=', $id_order)->firstOrFail();
        $post = new orderFail;
        $post->id_order = $member['id_order'];
        $post->fname = $member['fname'];
        $post->lname = $member['lname'];
        $post->phone = $member['phone'];
        $post->email = $member['email'];
        $post->pickupType = $member['pickupType'];
        $post->address = $member['address'];
        $post->remark = $member['remark'];
        $post->save();
        
        $member::where('id_order', '=', $id_order)->delete();
        return redirect('/admin/order')->with('success', 'Order transferred to failed');
        
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

        $this->validate($request, [ 'input_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:8096', ]);

        if ($request->hasFile('input_img')) {
            $id = DB::table('shops')->orderBy('id', 'desc')->first();
            /* return $id; */
            if (is_null($id)){
                $id=1;

            }else{

                $id=$id->id;
                $id++;
            }
            $image = $request->file('input_img');
            $name = $id.'.jpg';
            $destinationPath = public_path('img_product');
            $image->move($destinationPath, $name);
        }

        $shop->id=$id;
        $shop->name=$request->input('name');
        $shop->price=$request->input('price');
        /* dd($request->input('myarray.3')); */
        /* dd($request->input('myarray')); */
        $csizes=$request->input('myarray');
        foreach ($csizes as $tmp){
            /* model object should be created everytime data is save */
            $cake_sizes=new cake_sizes;
            $cake_sizes->id_cake=$id;
            $cake_sizes->sizes=$tmp;
            $cake_sizes->save();
        }
        
        $shop->description=$request->input('description');
        $shop->save();
        return redirect('/admin/product')->with('success', 'Successfully added product');
        
    }

    public function editStore(Request $request)
    {
        $shop=new shop;

        $id=$request->input('id');
        $name=$request->input('name');
        $price=$request->input('price');
        $desc=$request->input('description');

        if ($request->hasFile('input_img')) {
            $this->validate($request, [
                'input_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            ]);
            $image = $request->file('input_img');
            $src = $id.'.jpg';
            $destinationPath = public_path('img_product');
            $image->move($destinationPath, $src);

        }
            DB::table('shops')
            ->where('id',$id )
            ->update(['name' => $name,
                    'price' => $price,
                    'updated_at' => date('Y-m-d H:i:s'),
                    'description' => $desc]);
        /* else{ */
        /*     DB::table('shops') */
        /*     ->where('id',$id ) */
        /*     ->update(['name' => $name]); */
        /*     ->update(['price' => $price]); */
        /*     ->update(['description' => $desc]); */
        /* } */
        try{
            $csizes=$request->input('myarray');
            cake_sizes::where('id_cake',$id)->delete();
            foreach ($csizes as $tmp){
                /* model object should be created everytime data is save */
                $cake_sizes=new cake_sizes;
                $cake_sizes->id_cake=$id;
                $cake_sizes->sizes=$tmp;
                $cake_sizes->save();
            }
        } catch(\Exception $ex){ 
                /* dd($ex->getMessage()); */ 
                /* dd('Please enter at least one size for cake'); */ 
            return redirect('/admin/product')->with('success', 'Successfully updated product');
        }

        return redirect('/admin/product')->with('success', 'Successfully updated product');
        
    }

    public function edit(Request $request,$id)
    {
        
        $item=shop::find($id);
        $id_cake=$id;
        $sizes=cake_sizes::where('id_cake', '=', $id)->get();
        /* dd($item); */
        return view('admin.productEdit', compact('item','sizes'));
        
    }

    public function delete(Request $request,$id)
    {
        $file=public_path().'/img_product/'.$id.'.jpg';
        File::delete($file);
        DB::table('shops')->where('id', '=', $id)->delete();
        DB::table('cake_sizes')->where('id_cake', '=', $id)->delete();
        return redirect('/admin/product')->with('success', 'Successfully deleted product');
\Log::info('This is some useful information.');
    }

    public function showCart(Request $request, $id){
        $cart = cartSystem::find($id);
        $tmp = $cart['data'];
        $data = json_decode($tmp, true);
        /* dd($data); */
        return view('admin.showCart', ['products' => $data['items'], 'totalPrice' => $data['totalPrice']]);
    }
}
