<?php

namespace App\Http\Controllers\Reseller\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reseller\Reseller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ResellerRegisterController extends Controller
{
    public function RegisterForm(){
      return view('reseller.auth.register');
    }

    public function Store(Request $request){

      $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:resellers,email,',
        'password' => 'required',
    ]);

$reseller = new Reseller([
    'name' => $request->name,
    'email' => $request->email,
    'password' => Hash::make($request->password),
]);

$rememberToken = Str::random(60);

$reseller->remember_token = $rememberToken;

$reseller->save();


      Auth::guard('reseller')->login($reseller);

      return redirect()->route('reseller');
    }
}
