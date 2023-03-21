<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isadmin
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
        if(Auth::check()){
            if(Auth::User()->usertype === 'superadmin'){
                return $next($request);
            }else{
                return redirect('/testing')->with('success','Anda Member');
            }
        }else{
            return redirect('/sesi')->withErrors('Silahan Login Terlebih Dahulu');
        }
        
    }
}
