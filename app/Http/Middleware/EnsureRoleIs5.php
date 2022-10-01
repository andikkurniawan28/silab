<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureRoleIs5
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
        switch(session('role'))
        {
            case 1 : return $next($request); break;
            case 5 : return $next($request); break;
            default : return redirect()->back()->with('error', 'Anda tidak memiliki akses ke halaman tersebut.'); break;
        }
    }
}
