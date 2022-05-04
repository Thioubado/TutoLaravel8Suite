<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\AddMemberController;

// appel de la classe ShowMemberController
use App\Http\Controllers\ShowMemberController;
// appel de la classe ShowMemberController2
use App\Http\Controllers\ShowMemberController2;

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