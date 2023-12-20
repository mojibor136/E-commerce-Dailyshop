<?php

namespace App\Http\Controllers\Reseller\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResellerLoginController extends Controller
{
   public function LoginForm(){
    return view('reseller.auth.login');
   }

   public function Login(Request $request){
      
      $reseller = $request->only('email' , 'password');

      if(!Auth::guard('reseller')->attempt($reseller)){
         return redirect()->route('reseller.login.form');
      }

      return redirect()->route('reseller');
   }
}
