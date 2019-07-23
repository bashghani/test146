<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class projmgr
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
        if ( Auth::check() && Auth::user()->is_proj_mgr() )
        {
            return $next($request);
        }
else {// return redirect('home')

 Auth::logout();
 echo "not Authorized";
              return redirect('/home'); 
            }
        //return $next($request);
    }
}
