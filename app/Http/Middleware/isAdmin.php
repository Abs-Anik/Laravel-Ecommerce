<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class isAdmin
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
        //check admin
        if(auth()->user()->is_admin == 1){
            return $next($request);
        }

        //not admin then redorection to home page
        return redirect('home')->with('error', 'You are not access the admin area');

        //After this got to kernel.php and setup route middleware.
        
    }
}
