<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Category;

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
      'category_name'=>'required|unique:categories'
      ]);
      
      Category::insert([
          'category_name' =>$request->category_name,   
          'slug' =>strtolower(str_replace('','-', $request->category_name)), 
      ]);
            return redirect()->route('allcategory')->with('massage', 'Add Category Successful');
  }


    public function DeleteCategory($id){
      $delete_category = $id;
      Category::findOrFail($delete_category)->delete();
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
