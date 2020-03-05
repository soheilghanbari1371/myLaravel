<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRequestOwner
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

        $request_ad = Auth::user()->requests->where('id',$request->id)->first();
        if(is_null($request_ad)){
            return back();
        }
        return $next($request);
    }
}
