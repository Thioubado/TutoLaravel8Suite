<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//appel du model
use\App\Models\amie;

class AmieController extends Controller
{
    //

    function list()
    {
        $data = amie::all();
        return view('amie',['amies'=> $data]);
    }

    function delete($id)
    {
        $data = amie::find($id);
        $data ->delete();
        return redirect ('list');
    }
}
