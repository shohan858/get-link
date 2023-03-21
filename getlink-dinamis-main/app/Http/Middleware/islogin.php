<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Console\View\Components\Alert;
use Alert;
class islogin
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
            return $next($request);
        }else{
            Alert::error('Gagal', 'Silahkan Login Terlebih Dahulu');
            return redirect('sesi')->with('error','Silahkan Login Terlebih Dahulu');
        }
    }
}
