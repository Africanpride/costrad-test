<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DetectDarkMode
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
        $isDarkMode = $this->checkDarkMode();

        $request->attributes->set('isDarkMode', $isDarkMode);

        return $next($request);
    }

    /**
     * Check if the application is in dark mode.
     *
     * @return bool
     */
    private function checkDarkMode()
    {
        // Check if the user has explicitly set a dark mode preference
        if (session()->has('dark_mode')) {
            return session('dark_mode');
        }

        // Check if the user's operating system prefers dark mode
        $userAgent = request()->header('User-Agent');
        $isDarkModeOS = strpos($userAgent, 'Darwin') !== false || strpos($userAgent, 'Linux') !== false;

        // Check if the user's browser has dark mode enabled
        $isDarkModeBrowser = request()->hasHeader('X-Theme-Mode') && request()->header('X-Theme-Mode') === 'dark';

        // Check if the Tailwind CSS dark mode class is applied to the HTML element
        $isDarkModeTailwind = request()->hasHeader('X-Dark-Mode') && request()->header('X-Dark-Mode') === 'true';

        // Return true if any of the dark mode conditions are true, false otherwise
        return $isDarkModeOS || $isDarkModeBrowser || $isDarkModeTailwind;
    }
}
