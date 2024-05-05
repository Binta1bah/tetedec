<?php

namespace App\Http\Controllers;

use App\Models\Contribuable;
use Illuminate\Http\Request;


class ContribuableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
         $contribuables = Contribuable::all();
         return view('contribuable.index', ['contribuables' => $contribuables]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contribuable.store');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // $validatedData = $request->validate([
        //     'ifu' => 'required|string|unique:contribuables,ifu|max:255',
        //     'raisonSociale' => 'required|string|max:255',
        //     'formeJuridique' => 'required|string|max:255',
        //     'secteur' => 'required|string|max:255',
        //     'telephone' => 'required|string|unique:contribuables,telephone|max:255',
        //     'adresseVille' => 'required|string|max:255',
        //     'adresseRue' => 'required|string|max:255',
        //     'email' => 'required|email|unique:contribuables,email|max:255',
        // ]);
    
        // dd('ok');

        $nombre = Contribuable::count();

        $date = date('dmy');
        $ifu = 'IFU' . $date . sprintf('%05d', $nombre + 1);

        $data = $request->all();
        $data['ifu'] = $ifu;
        // dd($data);

        $contribuable = Contribuable::create($data);
       
        // Créer un nouveau contribuable en utilisant l'assignation de masse
        // Contribuable::create($validatedData);
    
        // Rediriger vers la liste des contribuables avec un message de succès
        return redirect()->route('contribuables.index')->with('success', 'Contribuable créé avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contribuable $contribuable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contribuable $contribuable)
    {
        return view('contribuable.edit', ['contribuable' => $contribuable]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contribuable $contribuable)
    {
        $data = $request->all();
        $contribuable->update($data);

        // Rediriger après la mise à jour
        return redirect()->route('contribuables.index')->with('success', 'Le contribuable a été mis à jour avec succès.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contribuable $contribuable)
    {
        $contribuable->delete();

        return redirect()->route('contribuables.index')->with('success', 'contribuable supprimé avec succès.');
    }
}
