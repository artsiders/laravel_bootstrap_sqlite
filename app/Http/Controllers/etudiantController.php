<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Etudiant;
use Illuminate\Http\Request;

class etudiantController extends Controller
{
    public function index() {
        // $etudiants = Etudiant::orderBy('nom', 'asc')->get();
        $etudiants = Etudiant::orderBy('nom', 'asc')->paginate(6);
        return view('pages.etudiant', compact('etudiants'));
    }
    public function create()
    {
        $classes = Classe::all();
        return view('pages.createEtudiant', compact('classes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            "nom" => "required",
            "prenom" => "required",
            "classe_id" => "required",
        ]);

        // pour utilise cette methode il faut declarer un fillable dans le model etudiant
        Etudiant::create($request->all());

        // Etudiant::create([
        //     "nom" => $request->nom,
        //     "prenom" => $request->prenom,
        //     "classe_id" => $request->classe_id,
        // ]);

        return back()->with("success", "etudiant ajouter avec succè !");
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Etudiant $client
     * @return \Illuminate\Http\Response
    */
    public function destroy(Etudiant $etudiant)
    {
        $etudiant->delete();
        
        return redirect()->route('clients.index')
        ->with('success','etudiant supprimé avec succès');
    }
}
