<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Récupérer tous les agents de la base de données
        $agents = Agent::all();

        // Renvoyer les agents à la vue 'agents.index'
        return view('agent.index', ['agents' => $agents]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation des données de la requête
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'matricule' => 'required|string|unique:agents,matricule|max:255',
            'email' => 'required|email|unique:agents,email|max:255',
            'password' => 'required|string|min:8',
            'departement' => 'required|string|max:255',
        ]);
    
        // Hashage du mot de passe avant de l'enregistrer
        $validatedData['password'] = bcrypt($validatedData['password']);
    
        // Création d'un nouvel agent
        $agent = new Agent;
        $agent->nom = $validatedData['nom'];
        $agent->prenom = $validatedData['prenom'];
        $agent->matricule = $validatedData['matricule'];
        $agent->email = $validatedData['email'];
        $agent->password = $validatedData['password'];
        $agent->departement = $validatedData['departement'];
        $agent->save(); // Enregistrement de l'agent dans la base de données
    
        // Redirection vers une page avec un message de succès
        return redirect()->route('agents.index')->with('success', 'Agent créé avec succès');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Agent $agent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agent $agent)
    {
        return view('agent.edit', ['agent' => $agent]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Agent $agent)
    {
       
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'matricule' => 'required|string|unique:agents,matricule,' . $agent->id . '|max:255',
            'email' => 'required|email|unique:agents,email,' . $agent->id . '|max:255',
            'departement' => 'required|string|max:255',
        ]);

        


        // Mettre à jour les données de l'agent
        $agent->update($validatedData);

        // Rediriger après la mise à jour
        return redirect()->route('agents.index')->with('success', 'L\'agent a été mis à jour avec succès.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agent $agent)
    {
        // Supprimez l'agent en utilisant la méthode delete() du modèle
        $agent->delete();

        return redirect()->route('agents.index')->with('success', 'Agent supprimé avec succès.');
    }
}
