<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */


    // Default user = 0
    // Admin = 1

    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check() && !Auth::user()->hasRole('administrator|superadministrator'))
        {
            // Auth::user()->addRole('administrator');
            Auth::logout();
            return redirect(route('admin.login'))->with('message', 'please login first');
        }
        
        return $next($request);
    }
}
