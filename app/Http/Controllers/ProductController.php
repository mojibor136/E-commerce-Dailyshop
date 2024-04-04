<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductDetaile;
use Illuminate\Http\Request;
use Session;

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
        $productId = collect($SingleProducts)->pluck('id')->toArray();
        $productsImgs = ProductDetaile::where('product_id',$productId)->paginate(4);
        return view('single-product' , compact('SingleProducts','Products','productsImgs'));
    }

    public function ProductFilter($id, $slug){
        $products = Product::where('product_category_id',$id)->latest()->paginate(6);
        $categorySlugs = Category::where('slug',$slug)->get();
        Session::put('categoryName',$categorySlugs);
        if($products->isEmpty()){
            $error = '';
            return view('filter-product',compact('products','error','categorySlugs'));
        }
        else{
            return view('filter-product',compact('products','categorySlugs'));
        }
    }   

    public function PriceFiltur(Request $request){
        $price = $request->price;
        $categoryNames =  Session::get('categoryName');
        $categoriesData = [];
        foreach( $categoryNames as $key=> $categoryName){
            $categoriesData[] = [
                'categorySlug' => $categoryName->slug,
            ];
        }

        if($price == '100-500'){
            $min = '100';
            $max = '500';
        }
        elseif($price == '500-1000'){
            $min = '500';
            $max = '1000';
        }
        elseif($price == '1000-1500'){
            $min = '1000';
            $max = '1500';
        }
        elseif($price == '1500-2000'){
            $min = '1500';
            $max = '2000';
        }
        elseif($price == '2000-2500'){
            $min = '2000';
            $max = '2500';
        }
        elseif($price == '2500-3000'){
            $min = '2500';
            $max = '3000';
        }
        elseif($price == '3000-3500'){
            $min = '3000';
            $max = '3500';
        }

        foreach($categoriesData as $data){
            $category = $data['categorySlug'];
        }
        session::put('category',$category);
        $priceProducts = Product::where('product_category_name',$category)->whereBetween('product_price',[$min,$max])->get();
        if($priceProducts->isEmpty()){
            $error = $price;
            return view('filter-product',compact('error','categoriesData'));
        }
        else{
            return view('filter-product',compact('priceProducts','categoriesData'));
        }
    }

    public function SizeFiltur(Request $request){
        $categoryNames =  Session::get('categoryName');
        $categoriesData = [];
        foreach( $categoryNames as $key=> $categoryName){
            $categoriesData[] = [
                'categorySlug' => $categoryName->slug,
            ];
        }
        $size = $request->size;
        foreach($categoriesData as $data){
            $category = $data['categorySlug'];
        }
        $productSizeId = ProductDetaile::where('productSize',$size)->get();
        $sizeId = collect($productSizeId)->pluck('product_id')->toArray();
        $productSizes = Product::where('id',$sizeId)->where('product_category_name',$category)->get();
        if($productSizes->isEmpty()){
            $error = 'Size';
            return view('filter-product',compact('error','categoriesData'));
        }
        else{
            return view('filter-product',compact('productSizes','categoriesData'));
        }
    }
}