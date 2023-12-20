<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class ShippingController extends Controller
{
    public function Shipping(){
        $user_id = Auth::id();
        $cart_items = Cart::where('cart_type', 'user')->where('user_id' , $user_id)->get();
        return view('shippng', compact('cart_items'));
    }

    public function DeleteShippingItem($id){
        Cart::findOrFail($id)->delete();
        return redirect()->route('shipping');
    }

    public function StoreShipping(Request $request){
        
        $data = json_decode($request->input('cartitem'),true);

        dd($data);
    }
}
