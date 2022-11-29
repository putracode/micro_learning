<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsApprove
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
        if(Auth::user()->is_approve == 'Not Approved' ){
            Auth::logout();

            // return redirect()->back()->with('NotApproved','Akun Terdaftar!
            // Mohon Menunggu Persetujuan Admin');

            return redirect('/login')->with("NotApproved","Please wait for Admin approval!");
        }

        return $next($request);
    }
}
