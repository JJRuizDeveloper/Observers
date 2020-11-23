<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $products = Product::all();
        return view('home', compact('products'));
    }

    public function buy($product_id)
    {
        $order = new Order;
        $order->user_id = Auth::user()->id;
        $order->product_id = $product_id;
        $order->save();

        return redirect()->route('home');
    }
}
