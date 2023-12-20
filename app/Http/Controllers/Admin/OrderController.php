<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function Index(){
        return view('admin.allorder');
    }

    public function PandingOrder(){
        return view('admin.pandingorder');
    }

    public function ConfrimOrder(){
        return view('admin.confrimorder');
    }
}
