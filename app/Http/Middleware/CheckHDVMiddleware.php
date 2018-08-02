<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class CheckHDVMiddleware
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
        if(Auth::check() && Auth::user()->role == 2)
        {
            if(Auth::user()->status == 1){
                return redirect()->route('trang-chu')->with('thongbao','Bạn chưa được cấp quyền');
            }else{
                return $next($request);
            }          
        }else{
            return redirect()->route('trang-chu');
        }
    }
}
