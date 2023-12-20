<?php

namespace App\Http\Controllers\Reseller\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResellerLogoutController extends Controller
{
    public function Logout(){
        Auth::guard('reseller')->Logout();

        return redirect()->route('reseller.login.form');
    }
}
