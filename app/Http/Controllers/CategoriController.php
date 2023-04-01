<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CategoriController extends Controller
{
    public function index()
    {
        $data['products'] = Product::with('category')->get();

        return view('product/Categori',$data);

        
    }
}
