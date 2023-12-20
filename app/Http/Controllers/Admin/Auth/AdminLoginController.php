<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function LoginForm(){
        return view('admin.auth.login');
    }

    public function Login(Request $request){
        $credentials = $request->only('email', 'password');

        if (!Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.login.form');
        }
        return redirect()->route('admin');
    }
}
