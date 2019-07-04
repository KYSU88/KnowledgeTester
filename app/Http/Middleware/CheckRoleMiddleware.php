<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //User role is admin
        if(Auth::check() && Auth::user()->role->name === "admin")
        {
          dd('dziala');
        }
        //default redirect
        return $next($request);
    }
}
