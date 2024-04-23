<?php

namespace App\Http\Controllers;

use App\Models\Declaration;
use App\Models\Impot;
use Illuminate\Http\Request;

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Impot $impot)
    {
        //
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
