<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// appel du model garcon
use App\Models\garcon;

class GarconController extends Controller
{
    //
    function afficher()
    {
        $data = garcon::all();
        return view('garcons', ['garcons'=>$data]);
    }

    function delete($id)
    {
        $data = garcon::find($id);
        $data -> delete();
        return redirect('garcons');
    }

}
