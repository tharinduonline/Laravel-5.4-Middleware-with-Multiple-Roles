<?php

namespace App\Http\Middleware;

use Closure;

class Teacher
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
        if (Auth::check() && Auth::user()->role == 'teacher') {
        return $next($request);
        }
        elseif (Auth::check() && Auth::user()->role == 'student') {
        return redirect('/student');
        }
        else {
        return redirect('/admin');
    }

    }
}
