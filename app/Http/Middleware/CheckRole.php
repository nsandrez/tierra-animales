<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
{

    public function handle($request, Closure $next, $role)
    {
        if (Auth::check() && Auth::user()->rol === $role) {
            return $next($request);
        }

        return redirect()->route('error.403');
    }
}
