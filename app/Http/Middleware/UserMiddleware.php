<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role->id == 2 && Auth::user()->profiled == 1) {
            return $next($request);
        } elseif (Auth::check() && Auth::user()->role->id == 2 && Auth::user()->profiled == 0) {
            return redirect()->route('user.pending');
        } else {
            return redirect()->route('login');
        }
    }
}
