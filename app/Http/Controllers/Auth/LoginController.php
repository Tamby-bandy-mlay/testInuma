<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Affiche le formulaire de connexion
    public function showLoginForm()
    {
        return view('auth.login'); // Assure-toi que la vue existe dans resources/views/auth/login.blade.php
    }

    // Traite la connexion
    public function login(Request $request)
    {
        // Validation des données
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Tente la connexion avec les identifiants
        if (Auth::attempt($credentials)) {
            // Regénère la session pour éviter fixation de session
            $request->session()->regenerate();

            // Récupère l'utilisateur connecté
            $user = Auth::user();

            // Redirige selon le rôle
            if ($user->role === 'directeur') {
                return redirect()->intended('/dashboard');
            } else {
                return redirect()->intended('/'); // Autre page d'accueil ou tableau de bord selon le rôle
            }
        }

        // Si les identifiants sont incorrects, retour à la page de login avec message d'erreur
        return back()->withErrors([
            'email' => 'Les informations de connexion sont incorrectes.',
        ])->onlyInput('email');
    }

    // Déconnexion
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/'); // Redirection vers la page d'accueil après déconnexion
    }
}
