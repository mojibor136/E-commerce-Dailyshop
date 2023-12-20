<?php

namespace App\Http\Middleware\Reseller;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResellerMiddleware
{
 /**
     * একটি আসা যাচ্ছে রিকোয়েস্ট হ্যান্ডল করতে
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        // ব্যবহারকারী যদি অ্যাডমিন হিসেবে প্রমাণিত না হয়
        if (!Auth::guard('reseller')->check()) {
            // অ্যাডমিন লগইন পৃষ্ঠায় পুনর্নির্দেশ করুন
            return redirect()->route('reseller.login.form')->with('error', 'আপনার অ্যাডমিন হিসেবে লগইন করতে হবে।');
        }

        // যদি ব্যবহারকারীটি অ্যাডমিন হিসেবে প্রমাণিত হয়, তবে অনুরোধ চালিয়ে যান
        return $next($request);
    }
}
