<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Product;

class Controller extends BaseController
{
    public function test()
    {
        return view('test.test');
    }

    public function Data(Request $request){

        $InData = $request->InData;
        
        $data = [
            ['price' =>'300'],
            ['price' =>'300'],
            ['price' =>'300'],
            ['price' =>'300'],
            ['price' =>'500'],
            ['price' =>'500'],
            ['price' =>'500'],
            ['price' =>'500'],
            ['price' =>'500'],
            ['price' =>'500'],
            ['price' =>'500'],
            ['price' =>'350'],
            ['price' =>'350'],
            ['price' =>'350'],
            ['price' =>'350'],
            ['price' =>'350'],
            ['price' =>'350'],
            ['price' =>'350'],
            ['price' =>'100'],
            ['price' =>'500'],
            ['price' =>'300'],
            ['price' =>'900'],
            ['price' =>'1300'],
            ['price' =>'800'],
            ['price' =>'150'],
            ['price' =>'890'],
            ['price' =>'350'],
            ['price' =>'180'],
            ['price' =>'100'],
            ['price' =>'500'],
            ['price' =>'100'],
            ['price' =>'300'],
            ['price' =>'300'],
            ['price' =>'300'],

        ];

        $resultPrice = [];
        foreach($data as $getData){
            if($getData['price'] == $InData){
                $resultPrice[] = $getData;
            }
        }

        if($resultPrice){
            return $resultPrice;
        }
        else{
            return 'No Data';
        }
    }

    public function ProductsData(){
        $priceToProducts = Product::whereBetween('product_price',[100,450])->where('product_category_name','Electronic')->get();
        
        $array = [];
        foreach($priceToProducts as $price){
            $array[] = [
                'price' => $price->product_price,
                'name' => $price->product_name,
            ];
        }

        return $array;
    }

    public function PriceData(){
        return view('test.PriceData');
    }

}
