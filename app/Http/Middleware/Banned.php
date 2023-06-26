<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Banned
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
        if (Auth::check() && Auth::user()->ban == 1 || Auth::check() && Auth::user()->ban == true) {
            auth()->guard('web')->logout();
            return redirect()
            ->route('login')->with('banned', 'Account is banned due to terms violation. If you feel this was done in error, contact us via email with subject: Account Banned. ');
        }
        return $next($request);

    }
}
