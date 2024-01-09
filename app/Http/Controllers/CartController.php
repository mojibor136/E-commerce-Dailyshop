<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index()
    {
        $user_id = Auth::id();
        $cart_items = Cart::where('cart_type', 'user')->where('user_id', $user_id)->get();
        return view('addtocart', compact('cart_items'));
    }

    public function storeAddToCart(Request $request)
    {
        $request->validate([
            'quantity' => 'required|numeric|min:1',
        ]);

        $quantity = $request->quantity;
        $user_id = Auth::id();
        $cart_type = 'user';
        $id = $request->id;
        $product = Product::findOrFail($id);

        $data = [
            'user_id' => $user_id,
            'cart_type' => $cart_type,
            'product_img' => $product->product_img,
            'product_name' => $product->product_name,
            'product_price' => $product->product_price,
            'quantity' => $quantity,
        ];
        Cart::insert($data);

        return redirect()->route('addtocart');
    }

    public function deleteCartItem($id)
    {
        Cart::findOrFail($id)->delete();

        return redirect()->route('addtocart')->with('message', 'Product Cart Delete Successful');
    }
}
