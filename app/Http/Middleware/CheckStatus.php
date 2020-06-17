<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect('page-login');
        } elseif (Auth::check() && Auth::user()->verify == 0) {
            return $next($request);
        } elseif (Auth::check() && Auth::user()->verify == 1) {
            return redirect('/');
        }
    }
}
