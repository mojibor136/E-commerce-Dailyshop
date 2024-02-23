<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Shipping;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderDetail;
use Session;

class CheckoutController extends Controller
{
    // Process data for multiple products
    public function SandData(Request $request)
    {
        $productItems = $request->input('ProductItems');
        $processeData = $this->processData($productItems);
        $multipleItem = $processeData;
        return redirect()->route('receive.data', ['multipleItem' => $multipleItem]);
    }

    // Private method to process data for multiple products
    private function processData($productItems)
    {
        $processeData = array_merge($productItems);
        return $processeData;
    }

    // Store shipping information
    public function StoreShipping(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'number' => 'required',
            'division' => 'required',
            'city' => 'required',
            'address' => 'required',
        ]);

        $userId = Auth::id();
        $shippingType = 'user';

        $data = [
            'user_id' => $userId,
            'shipping_type' => $shippingType,
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
            'division' => $request->division,
            'city' => $request->city,
            'address' => $request->address,
        ];

        $productsData = $request->input('productsData');
        $processeData = array_merge($productsData);
        DD($processeData);
        // Session::put('ShippingData' ,$data);

        // return redirect()->route('payment');
    }

    // Display payment view
    public function payment()
    {
        $orderId = Session::get('ShippingData');
    }

    // Place an order
    public function orderPlace(Request $request)
    {
        $paymentData = [
            'payment_method' => 'bkash',
            'status' => 'pending',
        ];

        $payment = Payment::create($paymentData);

        $customerId = Auth::id();
        $orderData = [
            'customer_id' => $customerId,
            'shipping_id' => Session::get('shippingId'),
            'payment_id' => $payment->id,
            'order_type' => 'user',
            'status' => 'pending',
            'total' => $request->total,
        ];

        $order = Order::create($orderData);

        $userId = Auth::id();
        $cartItems = Cart::where('cart_type', 'user')->where('user_id', $userId)->get();

        foreach ($cartItems as $cartItem) {
            $orderDetailData = [
                'order_id' => $order->id,
                'product_id' => $cartItem->product_id, // Assuming this is the correct column
                'product_name' => $cartItem->product_name,
                'product_price' => $cartItem->product_price,
                'quantity' => $cartItem->quantity,
                'product_img' => $cartItem->product_img,
            ];

            OrderDetail::create($orderDetailData);
        }

        if (!isset($request->total)) {
            Session::forget('shippingId');
        }

        // Redirect to a confirmation page or any other relevant page
        return redirect()->route('order.confirmation');
    }

    // Display order confirmation
    public function OrderConfirmation()
    {
        return 'Successfully Order Confirmation';
    }
}
