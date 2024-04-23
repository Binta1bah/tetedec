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
            // Si l'authentification réussit, rediriger vers la page d'accueil ou d'agent
            return redirect()->route('dashboard');
        }

        // Si l'authentification échoue, retourner avec des erreurs
        return back()->withErrors([
            'email' => 'Les informations d\'identification ne correspondent pas.',
        ]);
    }
}
