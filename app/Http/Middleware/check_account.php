<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class check_account
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){

        if(!Session::get('session_account')){
            return redirect('login');
        }
        return $next($request);

    }
}
