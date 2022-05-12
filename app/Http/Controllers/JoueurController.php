<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//appel du model
use App\Models\joueur;

class JoueurController extends Controller
{
    // ajout de joueur
    function ajouterJoueur(Request $req)
    {
        $joueur = new joueur;
        $joueur -> nom = $req -> nom;
        $joueur -> prenom = $req -> prenom;
        $joueur -> email = $req -> email;
        $joueur -> poste = $req -> poste;
        $joueur -> numero = $req -> numero;
        $joueur -> nationalite = $req -> nationalite;
        $joueur -> save();
        return redirect('ajoutJoueur');
    }

    // affichage liste des joueurs
    function afficherListeJoueur()
    {
        $data = joueur::all();
        return view('listeJoueur', ['joueurs'=>$data]);
    }

    //modification
    function modifierJoueur($id)
    {
        // return joueur::find($id);
        $data = joueur::find($id);
        return view('modificationJoueur', ['joueurs'=>$data]);
    }
    
    //update
    function update(Request $req)
    {
        //return $req->input();
        $data = joueur::find($req->id);
        $data -> nom = $req -> nom;
        $data -> prenom = $req -> prenom;
        $data -> email = $req -> email;
        $data -> poste = $req -> poste;
        $data -> numero = $req -> numero;
        $data -> nationalite = $req -> nationalite;
        $data -> save();

    }

    function delete($id)
    {
        //return joueur::find($id);
        $data = joueur::find($id);
        $data -> delete();
        return redirect('listeJoueur');
    }

}
