<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserActive
{
    public function handle(Request $request, Closure $next)
    {
        // Vérifier si l'utilisateur est authentifié
        $user = Auth::user();
        
        if ($user && !$user->isActive()) {
            // Si l'utilisateur n'est pas actif, le déconnecter et rediriger vers la page d'activation
            Auth::logout(); // Déconnecter l'utilisateur
            $request->session()->invalidate(); // Invalider la session actuelle
            $request->session()->regenerateToken(); // Régénérer le token CSRF pour plus de sécurité

            // Rediriger l'utilisateur vers la page d'activation
            return redirect()->route('active'); // Assurez-vous que la route 'active' existe
        }

        return $next($request);
    }
}
