<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SearchController extends Controller
{
    public function searchProduct(Request $request) {
        $searchTerm = $request->input('search');

        $products = Product::where('product_name', 'like', '%' . $searchTerm . '%')->paginate(1);

        return view('search-product', compact('products'));
    }
}
