<?php

namespace App\Http\Middleware;

use Closure;

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

            return redirect()->route('admin.home');

        }else{

            return redirect()->route('admin',['aviso' => 'Acesso negado']);

        }

        return $next($request);
    }
}
