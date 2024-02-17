<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class SearchController extends Controller
{
    public function searchProduct(Request $request) {
        $search = $request->input('search');
        $Categories = Category::orderByRaw('RAND()')->get()->all();
        $TopSelles = Product::orderByRaw('RAND()')->paginate(6);
        $Products = Product::where('product_name', 'like', '%' . $search . '%')->paginate(12);
        return view('search-product', compact('Products' , 'Categories' ,'TopSelles'));
    }
}
