<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;

class CategoryController extends Controller
{
   public function Index(){
    return view('admin.addcategory');
   }

   public function AllCategory(){

      $categories = Category::latest()->get();
      return view('admin.allcategory' , compact('categories'));
   }

   public function StoreCategory(Request $request){
      $request->validate([
         'category_name'=>'required|unique:categories',
         'category_img' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
         ]);
         
         $imageName = '';
         if($image = $request->file('category_img')){
             $imageName = time().'-'.uniqid().'.'.$image->getClientOriginalExtension();
             $image->move(public_path('assets/image/CategoryImg'), $imageName);
         }
         $data = [
            'category_name' =>$request->category_name,
            'slug' => strtolower(str_replace('','-', $request->category_name)), 
            'category_img' => $imageName,
        ];
        Category::insert($data);
        return redirect()->route('allcategory')->with('massage', 'Added Category Successful');
  }


    public function DeleteCategory($id){
      Category::findOrFail($id)->delete();
      SubCategory::where('category_id',$id)->delete();
      Product::where('product_category_id',$id)->delete();
      return redirect()->route('allcategory')->with('massage', 'Deleted Category Successful');
   }

   public function EditCategory($id){
     $edit_category = Category::findOrFail($id);
     return view('admin.edit.editcategory' , compact('edit_category'));
   }
   
   public function UpdateCategory(Request $request){
      $request->validate([
          'category_name'=>'required|unique:categories'
          ]);
          
      $category_id = $request->category_id;
      Category::findOrFail($category_id)->update([
          'category_name' =>$request->category_name,   
          'slug' =>strtolower(str_replace('','-', $request->category_name)), 
      ]);
            return redirect()->route('allcategory')->with('massage', 'Updated Category Successful');
}

}
