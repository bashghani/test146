<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class employer
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
        if ( Auth::check() && Auth::user()->is_emp() )
        {
            return $next($request);
        }
else {// return redirect('home')
echo"not logged innnnn ";
 Auth::logout();
              return redirect('/home'); 
            }
        //return $next($request);
    }
}
