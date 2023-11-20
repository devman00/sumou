<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class PhoneIsVerified
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // dd(Auth::user()->userPhoneVerified());   
        // return redirect()->route('phoneverification.show');
        if(Auth::check() && ! Auth::user()->userPhoneVerified())
        {
            return redirect()->route('phoneverification.show');
        }
        
        return $next($request);
    }
}
