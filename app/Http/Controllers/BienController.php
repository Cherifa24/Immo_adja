<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bien;
use App\Models\Agence;
use App\Models\Type;

class BienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $biens = Bien::all();
        return view('biens.index')->with('biens',$biens);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bien = new Bien();
        return view('biens.create',compact('bien'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $file = request()->file('image');
    
        if ($file->isValid()) {
            $fileName = $file->getClientOriginalName();
            $file->storeAs('/Image/immobilier/', $fileName);
    
            // Enregistrez le nom du fichier dans votre base de données ou prenez d'autres mesures
            $type = Type::create( $request->all());
        $agence = Agence::create($request->all());
          
        

        Bien::create([
            'id_agence' => $agence->num_matricule,
            'id_type' => $type->id,
            'galerie' => '/Images/immobilier/'.$fileName,
        ]);
        return redirect()->route('bien.index');
           // return response()->json(['message' => 'Image enregistrée avec succès.']);
        } else {
            //return response()->json(['message' => 'Erreur lors de l'enregistrement de l'image.']);
        }
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
    public function edit(Bien $bien)
    {
        return view('biens.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bien $bien)
    {
        $bien->update($request->all());
        return redirect()->route('bien.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bien $bien)
    {
        $bien->delete();
        return redirect()->route('bien.index');
    }
}
