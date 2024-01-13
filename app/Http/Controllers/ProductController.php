<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function ProductDetails($id){
        $products = Product::latest()->paginate(6);
        $singleProducts = Product::where('id' , $id)->get();
        return view('single-product' , compact('singleProducts' , 'products'));
    }
}
