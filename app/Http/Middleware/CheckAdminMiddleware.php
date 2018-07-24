<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class CheckAdminMiddleware
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
        if(Auth::check() && Auth::user()->quyen == 3)
        {
            return $next($request);
        }else{
            return redirect()->route('trang-chu');
        }
    }
}
