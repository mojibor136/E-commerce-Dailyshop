<?php

namespace App\Http\Controllers\Reseller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResellerController extends Controller
{
    public function Reseller(){
        return view('reseller.dashboard');
    }
}
