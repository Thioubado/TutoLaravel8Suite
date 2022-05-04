<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//appel du model eleve
use App\Models\eleve;

class ShowMemberController2 extends Controller
{
    //
    function exemple2()
    {
         $data = eleve::all();
        return view('showMember2', ['members'=>$data]);
    }
}
