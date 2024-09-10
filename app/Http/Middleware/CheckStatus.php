<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckStatus
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->status === 'OPERATIVO') {
            return $next($request);
        }

        return redirect('/')->withErrors('Tu cuenta no está operativa.');
    }
}
