<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check())
        {
            // admin level =1
            // user level =0
            if (Auth::user()->level == true)
            {
                return $next($request);
            }
            else
            {
                return redirect('/')->with('message','Bạn không phải admin');
            }
        }
        else
        {
            return redirect('/login')->with('message','Bạn chưa đăng nhập!');
        }
    }
}
