<?php

namespace App\Http\Middleware;

use Closure;

class KrenovaMiddleware
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
      $user_role = User::with(‘role’)->find(Auth::id());

      if ($user->role->name == superadmin)
      {
        return redirect()->to(‘/users);
      }

      return redirect()->to(‘/‘);
    }
}
