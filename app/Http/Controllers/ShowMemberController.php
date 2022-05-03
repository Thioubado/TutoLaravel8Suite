<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//appel de la classe member pour la base de donnees
use App\Models\member;

class ShowMemberController extends Controller
{
    //
    function show()
    {
        $data = member::all();
        return view('showMember', ['members'=>$data]);
    }
}