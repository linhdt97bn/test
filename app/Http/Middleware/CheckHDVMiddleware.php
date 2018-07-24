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
        if(Auth::check() && Auth::user()->quyen == 2)
        {
            if(Auth::user()->trangthai == 1)
                return redirect()->route('trang-chu')->with('thongbao','Bạn chưa được cấp quyền');
            return $next($request);
        }else{
            return redirect()->route('trang-chu');
        }
    }
}
