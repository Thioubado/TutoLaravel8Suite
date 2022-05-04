<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// appel du model 
use App\Models\pagination;

class PaginationController extends Controller
{
    //

    function laPagination()
    {
        $data = pagination::paginate(5);
        return view('pagination', ['members'=> $data]);
    }
}
