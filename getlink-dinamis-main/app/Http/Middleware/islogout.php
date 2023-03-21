<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Alert;

class islogout
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
                Alert::success('Anda Sudah Login', 'Silahkan Logout Terlebih Dahulu');
                return redirect('/')->with('success','Anda Sudah Login');
            }elseif(Auth::User()->usertype === 'member'){
                Alert::success('Anda Sudah Login', 'Silahkan Logout Terlebih Dahulu');
                return redirect('/testing')->with('success','Anda Sudah Login');
            }
        }else{
            return $next($request);
        }
    }
}
