<?php

namespace App\Http\Controllers;

use cart;
use App\Models\Product;
use Illuminate\Http\Request;

class cartController extends Controller
{
    public function index()
    {
        $data['products'] = Product::with('category')->get();

        return view('product/cart',$data);

        
    }
}
