<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserActive
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */

    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->active == 0 && Auth::user()->email !== 'johnwelsh19@gmail.com') {
            auth()->guard('web')->logout();
            return redirect()
            ->route('login')
            ->with('inactive', 'Account is Inactive. Contact Administrator for rectification.');
        }
        return $next($request);
    }
}
