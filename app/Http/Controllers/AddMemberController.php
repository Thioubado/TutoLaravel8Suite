<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddMemberController extends Controller
{
    //
    function index(Request $req)
    {
        $data = $req->input('user');
        $req->session()->flash('user', $data);
        return redirect('addmember');
    }
}
