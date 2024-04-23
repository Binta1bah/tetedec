<?php

namespace App\Http\Controllers;

use App\Models\Contribuable;
use App\Models\Paiement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaiementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paiements = Paiement::all();
        return view('paiement.index', ['paiements' => $paiements]);
    }

    public function contribuable()
    {
        $contribuables = Contribuable::all();
        return view('paiement.store')->with('contribuables', $contribuables);
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
        $data = $request->all();
        $agent = Auth::id();
        $data['agent_id'] = $agent;
        $paiement = Paiement::create($data);
       
        return redirect()->route('paiements.index')->with('success', 'impôt ajouté avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Paiement $paiement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Paiement $paiement)
    {
        $contribuables = Contribuable::all();
        return view('paiement.edit')->with
        ([
            'contribuables' => $contribuables,
            'paiement' => $paiement
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Paiement $paiement)
    {
        $data = $request->all();
        $paiement->update($data);

        // Rediriger après la mise à jour
        return redirect()->route('paiements.index')->with('success', 'Le paiement a été mis à jour avec succès.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paiement $paiement)
    {
        //dd($declaration);
        $paiement->delete();

        return redirect()->route('paiements.index')->with('success', 'paiement supprimée avec succès.');
    }
}
