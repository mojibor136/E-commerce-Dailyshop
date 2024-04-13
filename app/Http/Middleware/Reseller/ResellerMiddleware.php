<?php

namespace App\Http\Middleware\Reseller;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResellerMiddleware
{
 /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::guard('reseller')->check()) {
            return redirect()->route('reseller.login.form')->with('error', 'আপনার অ্যাডমিন হিসেবে লগইন করতে হবে।');
        }

        return $next($request);
    }
}
