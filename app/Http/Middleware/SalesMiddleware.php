<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class SalesMiddleware
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
        foreach(Auth::user()->roles as $role){
            if($role->name == 'sales')
                return $next($request);
            
         }
        return redirect('');
       
    }
}
