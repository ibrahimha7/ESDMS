<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        switch ($guard) {
            case 'admin':
                if (Auth::guard('admin')->check()) {
                    return redirect()->route('admin.dashboard');
                }
                break;
            case 'supervisor':
                if (Auth::guard('supervisor')->check()) {
                    return redirect()->route('supervisor.dashboard');
                }
                break;
            default:
                if (Auth::guard($guard)->check()) {
                    return redirect()->route('home');
                }
        }

        return $next($request);
    }
}
