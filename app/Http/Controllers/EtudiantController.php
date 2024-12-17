<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    public function liste_etudiant()
    {
        return view('etudiant.liste');
    }

    public function ajout_etudiant() {
        return view('etudiant.ajouter');
    }

    public function store(Request $req){
        $req->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'classe' => 'required',
        ]);
        $etudiant = new Etudiant();
        $etudiant->nom = $req->nom;
        $etudiant->prenom = $req->prenom;
        $etudiant->classe = $req->classe;
        $etudiant->save();
        return redirect('/etudiant')->with('status','L\'étudiant a été ajouté avec succès!!!');
    }
}
