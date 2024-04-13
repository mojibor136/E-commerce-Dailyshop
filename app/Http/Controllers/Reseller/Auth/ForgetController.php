<?php

namespace App\Http\Controllers\Reseller\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ForgetController extends Controller
{
   public function ForgetPasswordShow(){
    return view('reseller.auth.forget-password');
   }
}
