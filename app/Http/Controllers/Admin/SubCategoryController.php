<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;


class SubCategoryController extends Controller
{
    public function Index(){
        $category = Category::latest()->get();
        return view('admin.addsubcategory' , compact('category'));
     }

     public function AllSubCategory(){
        $subcategory = SubCategory::latest()->get();
        return view('admin.allsubcategory' , compact('subcategory'));
     }

     public function StoreSubCategory(Request $request){

      $request->validate([
        'subcategory_name' =>'required',
        'category_id' =>'required',
      ]);

       $category_id = $request->category_id;
       $category_name = Category::where('id' , $category_id)->value('category_name');
       SubCategory::insert([
         'subcategory_name' =>$request->subcategory_name,   
         'slug' =>strtolower(str_replace('','-', $request->category_name)),
         'category_id' =>$category_id,
         'category_name' =>$category_name,
       ]);

       Category::where('id' , $category_id)->increment('subcategory_count');

       return redirect()->route('allsubcategory')->with('massage', 'Add SubCategory Successful');

     }

     public function EditSubCategory($id){
      $subcategory = SubCategory::findOrFail($id);
      return view('admin.edit.editsubcategory' , compact('subcategory'));
     }

      public function UpdateCategory(Request $request){
        $subcategory_id = $request->subcategory_id;
        SubCategory::findOrFail($subcategory_id)->update([
          'subcategory_name' =>$request->subcategory_name,   
          'slug' =>strtolower(str_replace('','-', $request->category_name)),
        ]);
        return redirect()->route('allsubcategory')->with('massage', 'Updated SubCategory Successful');
      }

      public function DeleteSubCategory($id){
        $category_id = SubCategory::where('id' , $id)->value('category_id');
        SubCategory::findOrFail($id)->delete();
        Category::where('id' , $category_id)->decrement('subcategory_count' , 1);
        return redirect()->route('allsubcategory')->with('massage', 'Delete SubCategory Successful');
      }
}
