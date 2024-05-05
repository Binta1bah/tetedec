<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class AgentAuthController extends Controller
{
    public function showLoginForm()
    {
        // Retourne la vue du formulaire de connexion
        return view('connexion');
    }

    public function login(Request $request)
    {
        // dd($request->all());
        // Valider les données de la requête
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Authentification de l'agent
        if (Auth::guard('agent')->attempt($request->only('email', 'password'))) {
            $user = Auth::guard('agent')->user();

            // Vérifier si c'est la première connexion
            if ($user->first_login) {
                // Mettre à jour le champ first_login à false
                $user->first_login = false;
                $user->save();
                // Rediriger l'utilisateur vers une page pour changer de mot de passe
                return redirect()->route('password.change');
            }   
            // Si l'authentification réussit, rediriger vers la page d'accueil ou d'agent
            return redirect()->route('impots.index');
        }

        if (Auth::guard('web')->attempt($request->only('email', 'password'))) {
            // Connexion réussie pour un agent
            return redirect()->route('impots.index');
        }

        // Si l'authentification échoue, retourner avec des erreurs
        return back()->withErrors([
            'email' => 'Les informations d\'identification ne correspondent pas.',
        ]);
    }

    public function logout()
    {
        Auth::guard('agent')->logout();

        return redirect()->route('acceuil');
    }
}
