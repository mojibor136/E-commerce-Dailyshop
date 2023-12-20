<?php

namespace App\Http\Controllers\Reseller\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reseller\Reseller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;

class ResellerRegisterController extends Controller
{
    public function RegisterForm(){
      return view('reseller.auth.register');
    }

    public function Store(Request $request){

      $request->validate([
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
    ]);

     $reseller = Reseller::create([
        'name' =>$request->name,
        'email' =>$request->email,
        'password' => Hash::make($request->password),
      ]);

      Auth::guard('reseller')->login($reseller);

      return redirect()->route('reseller');
    }
}
