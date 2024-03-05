<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class CommonController extends Controller
{
    public function ReceiveData(Request $request)
    {
        $multipleItem = $request->input('multipleItem');
        $singleItem = $request->input('singleItem');
        
        if (!empty($multipleItem)) {
            $data = 'delete';
            $delete = Session::put('delete',$data);
            return view('shipping')->with('multipleItem',$multipleItem, 'delete',$delete);
        } elseif (!empty($singleItem)) {
            return view('shipping')->with('singleItem',$singleItem);
        } else {
            return back();
        }
    }
    
}
