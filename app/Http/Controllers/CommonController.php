<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommonController extends Controller
{
    public function ReceiveData(Request $request)
    {
        $multipleItem = $request->input('multipleItem');
        $singleItem = $request->input('singleItem');
        
        if (!empty($multipleItem)) {
            return view('shipping')->with('multipleItem',$multipleItem);
        } elseif (!empty($singleItem)) {
            return view('shipping')->with('singleItem',$singleItem);
        } else {
            return back();
        }
    }
    
}
