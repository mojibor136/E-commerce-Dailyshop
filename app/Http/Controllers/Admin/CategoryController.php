<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

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
         
         $img = $request->file('category_img');
         $img_name = hexdec(uniqid()).'.'. $img->getClientOriginalExtension();
         $img->move(public_path('assets/img/CategoryImg'), $img_name);
         $img_url = '/' . $img_name;
         $data = [
            'category_name' =>$request->category_name,
            'slug' => strtolower(str_replace('','-', $request->category_name)), 
            'category_img' => $img_url,
        ];
        Category::insert($data);
        return redirect()->route('allcategory')->with('massage', 'Added Category Successful');
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
