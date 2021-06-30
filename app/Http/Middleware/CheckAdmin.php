<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // dd(strtolower($request->route()->parameter('type')));
        if(strtolower($request->route()->parameter('type')) == 'admin') {
            return $next($request);
        }else {
            return redirect('/');
        }

    }
}
