<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function Index(){
        $orders = Order::all();
        return view('admin.allorder',compact('orders'));
    }
    public function DeleteOrder($id){
        $order = Order::with('payment')->find($id);

        if($order){
            $order->payment()->delete();
            $order->shipping()->delete();
            $order->delete();
        }
        $orders = Order::all();
        return view('admin.allorder',compact('orders'));
        
    }
    public function PandingOrder(){
        return view('admin.pandingorder');
    }

    public function ConfrimOrder(){
        return view('admin.confrimorder');
    }
}
