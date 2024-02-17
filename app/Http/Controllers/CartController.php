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
    public function Cart()
    {
        $products = Product::latest()->paginate(6);
        $UserId = Auth::id();
        $CartItems = Cart::where('cart_type', 'user')->where('user_id',$UserId)->get();
        session(['CartItems'=>$CartItems]);
        return view('addtocart', compact('products'))->with('CartItems',$CartItems);
    }
    public function BuyNow(Request $request)
    {
        $SingleProducts = $request->input('SingleProducts');
        $processData = $this->ProcessData($SingleProducts);
    }
    private function ProcessData($SingleProducts){
        $processData = $SingleProducts;
        return $processData;
    }
    public function AddToCart(Request $request)
    {
        $user_id = Auth::id();
        $cart_type = 'user';
        $productId = $request->id;
        $cartProductId = Cart::where('product_id',$productId)->value('product_id');
        if($cartProductId){
            return back()->with('message','already carts added try anther products');
        }
        else{
            $request->validate([
                'quantity' => 'required|numeric|min:1|max:3',
            ]);
                $quantity = $request->quantity;
                $user_id = Auth::id();
                $cart_type = 'user';
                $productId = $request->id;
                $product = Product::findOrFail($productId);
        
                $data = [
                    'user_id' => $user_id,
                    'cart_type' => $cart_type,
                    'product_id' => $productId,
                    'product_img' => $product->product_img,
                    'product_name' => $product->product_name,
                    'product_price' => $product->product_price,
                    'quantity' => $quantity,
                ];
                Cart::insert($data);
                return redirect()->route('addtocart')->with('message','successfull added carts products');
        }
    }

    public function deleteCartItem($id)
    {
        Cart::findOrFail($id)->delete();

        return redirect()->route('addtocart')->with('message', 'carts delete successful');
    }
}
