<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class IsTeacher
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
        if(Auth::user()->accountType != 'Teacher'){
            return redirect('error');
        }
        return $next($request);
    }
}
