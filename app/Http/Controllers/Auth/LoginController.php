<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
   public function LoginForm(){
    return view('auth.login');
   }

   public function Login(Request $request){

    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);
    $user_login = $request->only('email', 'password');
    
    if (!Auth::attempt($user_login)) {
        return redirect()->route('login');
    }
    return redirect('/');
   }
}
