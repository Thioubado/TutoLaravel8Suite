<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Appel de la table
use Illuminate\Support\Facades\DB;

class QueryBuilder extends Controller
{
    //
    function ExampleWithQueryBuilder()
    {
        //return 'Query will be here';

         // $data = DB::table('members')->get();
        // return view('queryBuilder', ['data'=>$data]);

        return DB::table('amis')
        ->where('address', 'Senegal')
        ->get();
       
    }
}
