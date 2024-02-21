<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function Index(){
        $Categories = Category::orderByRaw('RAND()')->get()->all();
        $TopSelles = Product::orderByRaw('RAND()')->paginate(6);
        $Products = Product::orderByRaw('RAND()')->paginate(6);
        return view('welcome' , compact('Products' , 'Categories' ,'TopSelles'));
    }
    public function GetCategoriesData(){
        $Categories = Category::orderByRaw('RAND()')->get()->all();
        return response()->json($Categories);
    }
    public function ProductDetails($id){
        $SingleProducts = Product::where('id',$id)->get();
        foreach($SingleProducts as $category)
        $category = $category->product_category_id;
        $Products = Product::where('product_category_id',$category)->get();
        return view('single-product' , compact('SingleProducts','Products'));
    }

    public function ProductFilter($id, $slug){
        $products = Product::where('product_category_id',$id)->latest()->paginate(6);
        $slug = Category::where('slug',$slug)->get();
        if($products->isEmpty()){
            $massage = 'No Products';
            return view('filter-product' , compact('massage'));
        }
        elseif($slug->isEmpty()){
            return view('filter-product' , compact('massage'));
        }
        return view('filter-product',compact('products','slug'));
    }   
}