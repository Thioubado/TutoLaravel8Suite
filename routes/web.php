<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\AddMemberController;

// appel de la classe ShowMemberController
use App\Http\Controllers\ShowMemberController;
// appel de la classe ShowMemberController2
use App\Http\Controllers\ShowMemberController2;

//appel de la classe pagination
use App\Http\Controllers\PaginationController;

// appel de la classe AmisController
use App\Http\Controllers\AmisController;
//appel de la classe AmieController
use App\Http\Controllers\AmieController;
// appel de la classe enfantController
use App\Http\Controllers\EnfantController;
// appel de la classe GarconController
use App\Http\Controllers\GarconController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Flash Session
Route::view('/addmember','addmember');
Route::POST('/add',[AddMemberController::class,'index']);

Route::get('/showMember', [ShowMemberController::class, 'show']);

Route::get('showMember2', [ShowMemberController2::class, 'exemple2']);

//Route de la pagination
Route::get('/pagination',[PaginationController::class, 'laPagination']);

// route de la page amis
Route::view('/amis','amis');
Route::post('ajouter', [AmisController::class,'ajouterAmis']);
// route pour la page amie
Route::get('list', [AmieController::class, 'list']);
Route::get('delete/{id}', [AmieController::class, 'delete']);

// route pour la page enfants
Route::get('enfants', [EnfantController::class, 'ShowEnfant']);
Route::get('delete/{id}', [EnfantController::class, 'delete']);

// route pour la page garcons
Route::get('garcons', [GarconController::class, 'afficher']);
Route::get('delete/{id}', [GarconController::class, 'delete']);
// appel de la page showData
Route::get('edit/{id}', [GarconController::class, 'showData']);
Route::post('edit', [GarconController::class, 'update']);
