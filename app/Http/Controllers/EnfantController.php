<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// appel du model
use App\Models\enfant;

class enfantController extends Controller
{
    //
    function ShowEnfant()
    {
        $data = enfant::all();
        return view('enfants', ['enfants' => $data]);
        
    }
    
    function delete($id)
    {
        $data = enfant::find($id);
        $data -> delete();
        return redirect('enfants');

    }
}
