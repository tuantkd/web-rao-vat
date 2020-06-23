<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckViewInfor
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
        } elseif (Auth::check() && Auth::user()->level_id == 2 || Auth::user()->verify == 1 || Auth::user()->level_id == 1) {
            return $next($request);
        }

        abort(403);
    }
}
