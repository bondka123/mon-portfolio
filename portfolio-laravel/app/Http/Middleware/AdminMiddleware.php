<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Ici tu peux définir ton admin, par exemple user avec id = 1
        if (!Auth::check() || Auth::user()->id !== 1) {
            return redirect('/'); // Redirige si pas admin
        }

        return $next($request);
    }
}
