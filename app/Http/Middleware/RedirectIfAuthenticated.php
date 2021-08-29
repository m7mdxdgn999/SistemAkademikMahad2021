<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if ($guard == "admin" && Auth::guard($guard)->check()) {
            return redirect()->route('admin.mabna.index');
        }
        if ($guard == "dosen" && Auth::guard($guard)->check()) {
            return redirect()->route('dosen.jadwal.index');
        }
        if ($guard == "mahasiswa" && Auth::guard($guard)->check()) {
            return redirect()->route('mahasiswa.krs.index');
        }
        if (Auth::guard($guard)->check()) {
            return redirect('/home');
        }

        return $next($request);
    }
}
