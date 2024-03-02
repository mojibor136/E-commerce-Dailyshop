<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function test()
    {
        return view('test');
    }

    public function testData(Request $request)
    {
        if ($request->hasFile('productImg')) {
            $productImgs = $request->file('productImg');

            foreach ($productImgs as $key => $productImg) {
                $extension = $productImg->getClientOriginalExtension();
                dd($extension);
            }
        } else {
            dd('No files found');
        }
    }
}