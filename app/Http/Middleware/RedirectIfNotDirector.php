<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfNotDirector
{
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        if (!$user || $user->role !== 'directeur') {
            // Redirige si pas connecté ou pas directeur
            return redirect('/'); // Ou autre page d'accueil ou d'erreur
        }

        return $next($request);
    }
}
