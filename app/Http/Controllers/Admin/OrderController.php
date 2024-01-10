<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function Index(){
        $orders = Order::oldest('updated_at')->paginate(5);
        return view('admin.allorder',compact('orders'));
    }
    public function DeleteOrder($id){
        $order = Order::with('payment')->find($id);

        if($order){
            $order->payment()->delete();
            $order->shipping()->delete();
            $order->delete();
        }
        $orders = Order::latest()->paginate(1);
        return view('admin.allorder',compact('orders'));
        
    }
    public function PandingOrder(){
        $orders = Order::where('status', 'pending')->orderBy('updated_at')->paginate(5);
        return view('admin.pandingorder', compact('orders'));
    }    

    public function ConfrimOrder(){
        $orders = Order::where('status', 'cencel')->orderBy('updated_at')->paginate(5);
        return view('admin.confrimorder' , compact('orders'));
    }
}
