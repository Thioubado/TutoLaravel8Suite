<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// appel du model ami
use App\Models\ami;

class AmisController extends Controller
{
    //
    function ajouterAmis(Request $req)
    {
        $ami = new ami;
        $ami-> nom = $req -> nom;
        $ami-> prenom = $req -> prenom;
        $ami-> email = $req -> email;
        $ami-> address = $req -> address;
        $ami-> numero = $req -> numero;
        $ami-> save();
        return redirect('amis');


    }
}
