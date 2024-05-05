<?php

namespace App\Http\Controllers;

use App\Models\Declaration;
use App\Models\Impot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImpotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $impots = Impot::all();
        return view('impot.index', ['impots' => $impots]);
    }

    public function declaration()
    {
        $declarations = Declaration::all();
        return view('impot.store')->with('declarations', $declarations);
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
       // dd($request->all());
        $data = $request->all();
        $agent = Auth::id();
        $data['agent_id'] = $agent;
        $impot = Impot::create($data);
       
        return redirect()->route('impots.index')->with('success', 'impôt ajouté avec succès');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Impot $impot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Impot $impot)
    {
        $declarations = Declaration::all();
        return view('impot.edit')->with
        ([
            'declarations' => $declarations,
            'impot' => $impot
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Impot $impot)
    {
        $data = $request->all();
        $impot->update($data);

        // Rediriger après la mise à jour
        return redirect()->route('impots.index')->with('success', 'L\'impot a été mis à jour avec succès.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Impot $impot)
    {
         $impot->delete();

         return redirect()->route('impots.index')->with('success', 'impot supprimé avec succès.');
    }
}
