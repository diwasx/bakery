<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\order;
use App\orderFail;
use App\orderSuccess;
use App\shop;
use App\cake_sizes;
use App\cartSystem;
use App\pages_home;
use App\pages_stories;
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
        /* $order = order::all(); */
        $order = DB::table('orders')->where('status', 'pending')->get();
        return view('admin.main')->with('order',$order);
    }
    public function orderS()
    {
        $order = DB::table('orders')->where('status', 'success')->get();
        return view('admin.orderSuccess')->with('order',$order);
    }
    public function orderF()
    {
        $order = DB::table('orders')->where('status', 'fail')->get();
        return view('admin.orderFail')->with('order',$order);
    }


    public function orderSuccess($id_order)
    {
        DB::table('orders')
            ->where('id_order', $id_order)
            ->update(['status' => "success"]);
        return redirect('/admin/order')->with('success', 'Order transferred to success');
    }

    public function orderFail($id_order)
    {
        DB::table('orders')
            ->where('id_order', $id_order)
            ->update(['status' => "fail"]);
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

    public function pageHome()
    {
        $home = pages_home::all();
        
        return view('admin.pages_home')->with('home',$home);
        /* return view('admin.pages_home'); */
    }

    public function pageHomeNew()
    {
        
        return view('admin.pages_home_new');
    }

    public function pageHomeStore(Request $request){
        $home = new pages_home;

        $this->validate($request, [ 'input_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:8096', ]);

        if ($request->hasFile('input_img')) {
            $id = DB::table('pages_homes')->orderBy('id', 'desc')->first();
            if (is_null($id)){
                $id=1;
            }else{
                $id=$id->id;
                $id++;
            }
            $image = $request->file('input_img');
            $name = $id.'.jpg';
            $destinationPath = public_path('img_pages_home');
            $image->move($destinationPath, $name);
        }

        $home->id=$id;
        $home->title=$request->input('title');
        $home->description=$request->input('description');
        $home->save();
        return redirect('/admin/pages/home')->with('success', 'Successfully added item');
        
    }

    public function pageHomeEdit(Request $request,$id)
    {
        
        $item=pages_home::find($id);
        return view('admin.pages_home_edit', compact('item'));
        
    }

    public function pageHomeEditStore(Request $request) {
        $home=new pages_home;
        $id=$request->input('id');
        $title=$request->input('title');
        $desc=$request->input('description');

        if ($request->hasFile('input_img')) {
            $this->validate($request, [
                'input_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            ]);
            $image = $request->file('input_img');
            $src = $id.'.jpg';
            $destinationPath = public_path('img_pages_home');
            $image->move($destinationPath, $src);

        }
        DB::table('pages_homes')
        ->where('id',$id )
        ->update(['title' => $title,
                'description' => $desc]);

        return redirect('/admin/pages/home')->with('success', 'Successfully updated item');
    }

    public function pageHomeDelete(Request $request,$id)
    {
        $file=public_path().'/img_pages_home/'.$id.'.jpg';
        File::delete($file);
        DB::table('pages_homes')->where('id', '=', $id)->delete();
        return redirect('/admin/pages/home')->with('success', 'Successfully deleted item');
    }

    public function pageStories()
    {
        $stories = pages_stories::all();
        return view('admin.pages_stories')->with('stories',$stories);
    }

    public function pageStoriesNew()
    {
        
        return view('admin.pages_stories_new');
    }

    public function pageStoriesStore(Request $request){
        $stories = new pages_stories;

        $this->validate($request, [ 'input_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:8096', ]);

        if ($request->hasFile('input_img')) {
            $id = DB::table('pages_stories')->orderBy('id', 'desc')->first();
            if (is_null($id)){
                $id=1;
            }else{
                $id=$id->id;
                $id++;
            }
            $image = $request->file('input_img');
            $name = $id.'.jpg';
            $destinationPath = public_path('img_pages_stories');
            $image->move($destinationPath, $name);
        }

        $stories->id=$id;
        $stories->title=$request->input('title');
        $stories->description=$request->input('description');
        $stories->author=$request->input('author');
        $stories->save();
        return redirect('/admin/pages/stories')->with('success', 'Successfully added stories');
    }

    public function pageStoriesEdit(Request $request,$id)
    {
        
        $item=pages_stories::find($id);
        return view('admin.pages_stories_edit', compact('item'));
        
    }

    public function pageStoriesEditStore(Request $request) {
        $stories=new pages_stories;
        $id=$request->input('id');
        $title=$request->input('title');
        $desc=$request->input('description');
        $author=$request->input('author');

        if ($request->hasFile('input_img')) {
            $this->validate($request, [
                'input_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            ]);
            $image = $request->file('input_img');
            $src = $id.'.jpg';
            $destinationPath = public_path('img_pages_stories');
            $image->move($destinationPath, $src);

        }
        DB::table('pages_stories')
        ->where('id',$id )
        ->update(['title' => $title,
                'description' => $desc,
                'author' => $author]);
        return redirect('/admin/pages/stories')->with('success', 'Successfully updated stories');
    }

    public function pageStoriesDelete(Request $request,$id)
    {
        $file=public_path().'/img_pages_stories/'.$id.'.jpg';
        File::delete($file);
        DB::table('pages_stories')->where('id', '=', $id)->delete();
        return redirect('/admin/pages/stories')->with('success', 'Successfully deleted item');
    }
}
