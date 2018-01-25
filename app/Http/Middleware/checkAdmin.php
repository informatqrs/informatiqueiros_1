<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class checkAdmin
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

        if(Auth::check() && Auth::user()->tipo == 1){

            return $next($request);
            //return redirect()->route('admin.home');

        }else{

            return redirect()->route('admin')->with('aviso','Acesso negado');

        }

    }
}
