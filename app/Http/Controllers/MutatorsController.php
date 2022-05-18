<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//appel model 
use App\Models\groupe;

class MutatorsController extends Controller
{
    //
    public function index()
    {
        $groupe = new groupe;
        $groupe -> nom = "Cote";
        $groupe -> prenom = 'Lio';
        $groupe -> address = 'France';
        $groupe->save();
    }
}
