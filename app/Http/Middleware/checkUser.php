<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class checkUser
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

        if(Auth::check() && Auth::user()->tipo == 0){

          return redirect('index');

        }else if(Auth::check() && Auth::user()->tipo == 1){

          return redirect('admin/home');

        }else{

          return $next($request);

        }

    }
}
