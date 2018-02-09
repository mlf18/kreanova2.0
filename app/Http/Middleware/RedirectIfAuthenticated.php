<?php

namespace App\Http\Middleware;

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
        if (Auth::guard($guard)->check()) {
            return redirect('/');
        }

        return $next($request);
    }

    public function authenticated()
    {
        if($request->user()->hasRole('superadminadmin'))
                 {
                     // return redirect()->intended(route('admin.index'));
                     return redirect()->route('users.index');
                 }
             if($request->user()->hasRole('admin'))
                 {
                     return redirect()->route('pengusul.index');
                 }
             if($request->user()->hasRole('inventor'))
                 {
                     return redirect()->route('pengusul.');
                 }   
    }
}
