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

    public function testData(Request $request){

        if($request->hasFile('productImg')){
            $uploadedFiles = [];

            foreach($request->file('productImg') as $key=> $multipleImg){
                $uploadedFiles[] = [
                'originalName' => $multipleImg->getClientOriginalName(),
                ];
            }
            dd($uploadedFiles);
        }
        
    }

}
