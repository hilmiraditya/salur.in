<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class LoginType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'pekerja', $guard2 = 'majikan', $guard3 = 'agency')
    {
        if (Auth::guard($guard)->check()) {
            return redirect('/pekerja/home');
        }
        elseif (Auth::guard($guard2)->check()) {
            return redirect('/majikan/home');
        }
        elseif (Auth::guard($guard3)->check()) {
            return redirect('/agency/home');
        }
        return $next($request);
    }
}
