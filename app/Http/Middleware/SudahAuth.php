<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class SudahAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, $guard = null)
{
    $user = Auth::user();

    if ($user && Auth::guard($guard)->check()) {
        if ($user->role == 2 || $user->role == 0) {
            return redirect('/welcome');
        } elseif ($user->role == 1) {
            return redirect('/admin');
        }
    }

    return $next($request);
}
}
