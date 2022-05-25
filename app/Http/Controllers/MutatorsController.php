<?php

/**
 * (c) Boosteur.com v1.02 - 2022.
 */

namespace App\Http\Controllers;

// appel model
use App\Models\groupe;

class MutatorsController extends Controller
{
	public function index()
	{
		$groupe          = new groupe();
		$groupe->nom     = 'Cote';
		$groupe->prenom  = 'Lio';
		$groupe->address = 'France';
		$groupe->save();
	}
}
