<?php

namespace App\Http\Middleware;

use Closure;

class PanelMiddleware
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
        if (Auth::check() && Auth::user()->id === 11) {
            return $next($request);
        }
    
        return redirect()->route('erreur')->with('error', 'Accès refusé. Vous n\'êtes pas l\'administrateur.');

        return $next($request);
    }
}
