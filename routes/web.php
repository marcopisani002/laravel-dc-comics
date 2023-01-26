<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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

// Read - Rotta che legge tutti gli elementi presenti nella tabella products
// La risorsa / entità dovrà chiamarsi come la tabella, in lowercase, al plurale
Route::get("/comics", [PageController::class, "index"])->name("comics.index");
