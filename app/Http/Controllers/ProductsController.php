<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {

        return view('products.product',['data'=>Product::all()]);
    }

    public function details($id)
    {

        return view('products.details',['data'=>Product::find($id)]);
    }

    public function search(Request $req)
    {
        $result = Product::where('name', 'like', '%' . $req->input('query') . '%')->get();

        return view('products.search',['data'=>$result]);
    }

    public function addToCart(Request $req)
    {
        // echo "<pre>"; print_r($req->session()->get('user')->id); exit;
        if($req->session()->has('user'))
        {
            $cart = New Cart;
            $cart->product_id = $req->product_id;
            $cart->user_id = $req->session()->get('user')->id;
            $cart->save();
            return redirect()->back();

        }else{
            return redirect('/login');
        }
    }
}
