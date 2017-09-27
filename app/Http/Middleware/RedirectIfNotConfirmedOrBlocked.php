<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class RedirectIfNotConfirmedOrBlocked
{
    /** */
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->isConfirmedAndNotBlocked()) {
            return $next($request);
        }

        return redirect('/home');
    }
}
