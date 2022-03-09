<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class Authrole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check() && Auth::user()->role_id == 1){
            return $next($request);
        }elseif(Auth::check() && Auth::user()->role_id == 2){
            return $next($request);
        }elseif(Auth::check() && Auth::user()->role_id == 3){
            if(Auth::user()->verified != 0){
                
                return redirect()->to('/email/verify');
            }
            return redirect()->to('/');
        }
        else{
            return redirect()->to('/');
        }
    }
}
