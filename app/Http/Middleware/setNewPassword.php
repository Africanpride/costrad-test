<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class setNewPassword
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
        // Check if the user is authenticated
        if (Auth::check()) {
            // Check if the user has not set a new password yet
            if (!is_null(Auth::user()->must_create_password) && Auth::user()->must_create_password ) {
                // Redirect the user to the set password page
                return redirect()->route('set_password');
            }
        }

        // Allow the request to proceed
        return $next($request);
    }
}
