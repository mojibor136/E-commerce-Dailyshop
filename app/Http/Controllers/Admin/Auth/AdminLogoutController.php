<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLogoutController extends Controller
{
    public function Logout(){
        Auth::guard('admin')->Logout();

        return redirect()->route('admin.login.form');
    }
}
