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
            return $multipleItem;
        } elseif (!empty($singleItem)) {
            return $singleItem;
        } else {
            return back();
        }
    }
    
}
