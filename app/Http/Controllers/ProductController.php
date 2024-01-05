<?php

namespace App\Http\Controllers;

use App\Models\Admin\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function ProductDetails($id){
        $products = Product::where('id' , $id)->get();
        return view('single-product' , compact('products'));
    }
}
