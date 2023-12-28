<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class CartController extends Controller
{
    public function Index(){
        $user_id = Auth::id();
        $cart_items = Cart::where('cart_type', 'user')->where('user_id' , $user_id)->get();
        return view('addtocart' , compact('cart_items'));
     }
  
  
     public function StoreAddToCart(Request $request){

      $request->validate([
         'quantity' => 'required',
      ]);
      
        Cart::create([
           'user_id' => Auth::id(),
           'product_name' => $request->product_name,
           'product_price' => $request->product_price,
           'quantity' =>$request->quantity,
           'cart_type' => 'user',
        ]);
  
       return redirect()->route('addtocart');
     }

     public function DeleteCartItem($id){
        Cart::findOrFail($id)->delete();

        return redirect()->route('addtocart')->with('massage' , 'Product Cart Delete Successfull');
     }
}
