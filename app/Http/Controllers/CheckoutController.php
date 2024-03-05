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
        Session::put('processeData', $processeData);
        Session::put('shipping', $data);
        return redirect()->route('payment');
    }

    // Display payment view
    public function payment()
    {
        $processeData = Session::get('processeData');
        return view('payment')->with('processeData', $processeData);
    }

    // Place an order
    public function orderPlace(Request $request)
    {
        $paymentData = [
            'payment_method' => 'bkash',
            'status' => 'pending',
        ];

        $shippingData = Session::get('shipping');
        $shipping = Shipping::create($shippingData);
        $payment = Payment::create($paymentData);

        $customerId = Auth::id();
        $orderData = [
            'customer_id' => $customerId,
            'shipping_id' => $shipping->id,
            'payment_id' => $payment->id,
            'order_type' => 'user',
            'status' => 'pending',
            'total' => $request->total,
        ];
        $orderId = Order::create($orderData);

        Session::forget('shippingId');
        $processeData = Session::get('processeData');
        $orderDetailsData = [];
        foreach ($processeData as $index => $productsData) {
            $orderDetailsData[] = [
                'order_id' => $orderId->id,
                'product_id' => $productsData['productsId'],
                'product_name' => $productsData['name'],
                'product_price' => $productsData['price'],
                'quantity' => $productsData['quantity'],
                'product_img' => 'null',
            ];
        }
        OrderDetail::insert($orderDetailsData);
        $productId = collect($processeData)->pluck('productsId')->toArray();
        Product::whereIn('id', $productId)->decrement('quantity', 1);
        Session::forget('processeData');
        
        // Check if delete flag is set in the session
        if (Session::get('delete')) {
            // Remove cart data
            $this->clearCart();
            Session::forget('delete');
        }
        
        return redirect()->route('order.confirmation');
    }

    public function OrderConfirmation()
    {
        return 'Successfully Order Confirmation';
    }

    private function clearCart()
    {
        // Assuming you have a Cart model
        Cart::where('user_id', Auth::id())->delete();
    }
}
