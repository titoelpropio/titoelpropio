<?php

namespace App\Http\Middleware;

use Closure;

class Contador
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
    if($this->auth->user()->privilegio==2){
             return $next($request);
        }
        else{
        Session::flash('message-error','Sin privilegios');
        return redirect()->to('/');   
        
        }
                
    
    }
}
