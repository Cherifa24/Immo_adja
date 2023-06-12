<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agence;

class AgenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agences = Agence::all();
        return view('agences.index')->with('agences',$agences);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $agence = new Agence();
        return view('agences.create',compact('agence'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Agence::create($request->all());
        return redirect()->route('agence.index');
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
    public function edit(Agence $agence)
    {
        return view('agences.edit',compact('agence'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Agence $agence)
    {
        $agence->update($request->all());
        return redirect()->route('agence.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agence $agence)
    {
        $agence->delete();
        return redirect()->route('agence.index');
    }
}
