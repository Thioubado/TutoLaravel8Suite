<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// aapeld u model
use App\Models\groupe;

class AccessorsController extends Controller
{
    //
    public function index()
    {
        return groupe::all();
    }
}
