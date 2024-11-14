<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CheckUserActive
{
    public function handle(Request $request, Closure $next)
    {
        // Vérifier si l'utilisateur est authentifié et s'il est actif
        $user = Auth::user();
        
        if ($user && !$user->isActive()) {
            // Si l'utilisateur n'est pas actif, rediriger vers la page d'attente
            return redirect()->route('active'); // Assurez-vous que la route 'waiting' existe
        }

        return $next($request);
    }
}
