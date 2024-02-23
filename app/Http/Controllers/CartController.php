<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Product;
use Session;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    // Display the products and the items in the user's cart
    public function Cart()
    {
        $products = Product::latest()->paginate(6);
        $userId = Auth::id();
        $cartItems = Cart::where('cart_type', 'user')->where('user_id', $userId)->get();
        session(['cartItems' => $cartItems]);

        // Pass data to the 'addtocart' view
        return view('addtocart', compact('products'))->with('cartItems', $cartItems);
    }

    // Process the data for a single product
    public function BuyNow(Request $request)
    {
        $singleProducts = $request->input('SingleProducts');
        $singleItem = $singleProducts;
        return redirect()->route('receive.data', ['singleItem' => $singleItem]);
    }
    // Add a product to the user's cart
    public function AddToCart(Request $request)
    {
        $request->validate([
            'quantity' => 'required|numeric|min:1|max:3',
        ]);

        $userId = Auth::id();
        $cartType = 'user';
        $productId = $request->id;
        $cartProductId = Cart::where('product_id', $productId)->value('product_id');

        if ($cartProductId) {
            return back()->with('message', 'Products is already added.');
        } else {
            $product = Product::findOrFail($productId);

            $data = [
                'user_id' => $userId,
                'cart_type' => $cartType,
                'product_id' => $productId,
                'product_img' => $product->product_img,
                'product_name' => $product->product_name,
                'product_price' => $product->product_price,
                'quantity' => $request->quantity,
            ];

            // Use the create method to insert data into the Cart model
            Cart::create($data);

            return redirect()->route('addtocart')->with('message', 'Products is added successfully.');
        }
    }

    // Delete a cart item
    public function deleteCartItem($id)
    {
        Cart::findOrFail($id)->delete();

        return redirect()->route('addtocart')->with('message', 'products deleted successfully.');
    }
}
