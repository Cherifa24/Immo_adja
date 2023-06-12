<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Acquereur;

class AcquereurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $acquereurs = Acquereur::all();
        return view('acquereurs.index')->with('acquereurs',$acquereurs);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $acquereur = new Acquereur();
        return view('acquereurs.create',compact('acquereur'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Acquereur::create($request->all());
        return redirect()->route('acquereur.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Acquereur $acquereur)
    {
        //$acquereur = new Acquereur();
        return view('acquereurs.edit',compact('acquereur'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Acquereur $acquereur)
    {
        $acquereur->update($request->all());
        return redirect()->route('acquereur.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Acquereur $acquereur)
    {
        $acquereur->delete();
        return redirect()->route('acquereur.index');
    }
}
