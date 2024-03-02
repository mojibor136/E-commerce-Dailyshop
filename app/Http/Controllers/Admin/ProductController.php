<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function Index(){
        $subcategory = SubCategory::latest()->get();
        $category = Category::latest()->get();
        return view('admin.addprodcut' , compact('subcategory' , 'category'));
    }

    public function AllProduct(){
        $products = Product::latest()->get(); // Latest products first
        return view('admin.allproduct' , compact('products'));
    }

    public function StoreProduct(Request $request){
            $request->validate([
            'product_name' =>'required',
            'product_price' =>'required',
            'product_long_desc' =>'required|max:255',
            'product_short_desc' =>'required',
            'product_category_id' =>'required',
            'product_subcategory_id' =>'required',
            'quantity'=> 'required',
            'kay_word' =>'required',
            'product_img' =>'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            // 'productImg' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $imageName = '';
        if($image = $request->file('product_img')){
            $imageName = time().'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('assets/image/ProductImg'), $imageName);
        }

        $category_id = $request->product_category_id;
        $subcategory_id = $request->product_subcategory_id;
        $product_category_name =  Category::where('id' , $category_id)->value('category_name');
        $product_subcategory_name = SubCategory::where('id' , $subcategory_id)->value('subcategory_name');

        $product = Product::create([
            'product_name' => $request->product_name,
            'product_price' => $request->product_price,
            'product_short_desc' => $request->product_short_desc,
            'product_long_desc' => $request->product_long_desc,
            'product_category_id' => $request->product_category_id,
            'product_subcategory_id' => $request->product_subcategory_id,
            'product_category_name' => $product_category_name,
            'product_subcategory_name' => $product_subcategory_name,
            'quantity' => $request->quantity,
            'kay_word' => $request->kay_word,
            'product_img' => $imageName,
        ]);
        SubCategory::where('id' , $subcategory_id)->increment('product_count');
        Category::where('id' , $category_id)->increment('product_count');
        return redirect()->route('allproduct')->with('massage', 'Added Products Successful');
    }

    public function DeleteProduct($id){
        $category_id = Product::where('id' , $id)->value('product_category_id');
        $subcategory_id = Product::where('id' , $id)->value('product_subcategory_id');
        Product::findOrFail($id)->delete();
        SubCategory::where('id' , $subcategory_id)->decrement('product_count' , 1);
        Category::where('id' ,$category_id)->decrement('product_count' , 1);
        return redirect()->route('allproduct')->with('massage', 'Deleted Products Successful');
    }
    public function EditProduct($id){
        $products = Product::where('id',$id)->get();
        $subcategory = SubCategory::latest()->get();
        $category = Category::latest()->get();
        return view('admin.edit.editProduct',compact('subcategory' , 'category','products'));
    }
}
