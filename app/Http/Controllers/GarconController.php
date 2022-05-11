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

    function showData($id)
    {
        //return garcon::find($id);
        $data = garcon::find($id);
        return view('edit', ['data'=>$data]);
    }

    function update(Request $req)
    {
        //return $req->input();
        $data = garcon::find($req->id);
        $data->nom= $req->nom;
        $data->prenom= $req->prenom;
        $data->email= $req->email;
        $data->address= $req->address;
        $data->save();
        return redirect('garcons');
    }

}
