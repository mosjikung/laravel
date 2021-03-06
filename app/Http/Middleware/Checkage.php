<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Checkage
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
        if($request->age>=18){
            return redirect(route('member'));
        }
        return $next($request);
    }
}
