<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class RedirectIfNotAdmin
{
    /** */
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            return $next($request);
        }

        return redirect('/home');
    }
}
