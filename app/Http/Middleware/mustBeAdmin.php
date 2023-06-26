<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class mustBeAdmin
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->staff && Auth::user()->isAdmin()) {
            return $next($request);
        }
        abort(401, 'Unauthorized action.');
    }
}
