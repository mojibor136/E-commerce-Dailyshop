<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Shipping;
use App\Models\Payment;
use App\Models\Order;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    public function shipping(){
        $user_id = Auth::id();
        $cartItems = Cart::where('cart_type', 'user')->where('user_id', $user_id)->get();
        return view('shipping', compact('cartItems',));      
    }

    public function storeShipping(Request $request){
       $request->validate([
        'name' => 'required',
        'email' => 'required',
        'number' => 'required',
        'division' => 'required',
        'city' => 'required',
        'address' => 'required',
       ]);

       $user_id = Auth::id();
       $shippingType = 'user_customer';
       $data = [
           'user_id' => $user_id,
           'shipping_type' => $shippingType,
           'name' => $request->name,
           'email' => $request->email,
           'number' => $request->number,
           'division' => $request->division,
           'city' => $request->city,
           'address' => $request->address,
       ];

       $shipping = Shipping::create($data);
       Session::put('shipping_id', $shipping->id);
 
       return redirect()->route('payment');
    }

    public function payment(){
        $user_id = Auth::id();
        $cartItems = Cart::where('user_id', $user_id)->where('cart_type', 'user')->get();
        return view('payment' , compact('cartItems'));
    }

    public function orderPlace(Request $request){
        $paymentData = [
            'payment_method' => 'bkash',
            'status' => 'pending',
        ];
        $payment = Payment::create($paymentData);

        $customer_id = Auth::id();
        $orderData = [
            'customer_id' => $customer_id,
            'shipping_id' => Session::get('shipping_id'),
            'payment_id' => $payment->id,
            'order_type' => 'user_customer',
            'status' => 'pending',
            'total' => $request->total,
        ];

        Order::create($orderData);
    }
}
