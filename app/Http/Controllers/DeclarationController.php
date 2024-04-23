<?php

namespace App\Http\Controllers;

use App\Models\Contribuable;
use App\Models\Declaration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DeclarationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         
         $declarations = Declaration::all();
         return view('declaration.index', ['declarations' => $declarations]);
    }

    public function contribuable()
    {
        $contribuables = Contribuable::all();
        return view('declaration.store')->with('contribuables', $contribuables);
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
        //dd($request->all());
        $data = $request->all();
        $agent = Auth::id();
        $data['agent_id'] = $agent;
        $declaration = Declaration::create($data);
       
    
        // Rediriger vers la liste des declarations avec un message de succès
        return redirect()->route('declarations.index')->with('success', 'declaration créé avec succès');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Declaration $declaration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Declaration $declaration)
    {
        return view('declaration.edit', ['declaration' => $declaration]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Declaration $declaration)
    {
        $data = $request->all();
        $declaration->update($data);

        // Rediriger après la mise à jour
        return redirect()->route('declarations.index')->with('success', 'La declaration a été mis à jour avec succès.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Declaration $declaration)
    {
        //dd($declaration);
        $declaration->delete();

        return redirect()->route('declarations.index')->with('success', 'declaration supprimée avec succès.');
    }
}
