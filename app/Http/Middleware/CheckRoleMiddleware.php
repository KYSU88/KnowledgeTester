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
        //User role is admins
        if(Auth::check() && Auth::user()->role->name === "admin")
        {
          return response()->view('admins.index');
        }
        // User role is guest
        if(Auth::check() && Auth::user()->role->name === "guest")
        {
            return response()->view('home');
        }
        // User role is guest
        if(Auth::check() && Auth::user()->role->name === "teacher")
        {
            return response()->view('teachers.index');
        }

        return $next($request);
    }
}
