<?php

use App\Http\Controllers\cityController;
use App\Http\Controllers\etudiantController;
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
// il ne faut pas mettre de traitement dans le fichier web.php
// ici c'est juste pour le test
Route::get('/', function () {
    //on fait des traitement et ensuite on renvoi les valeur avec compact
    if(isset($_GET) and !empty($_GET)) {
        $name = $_GET['name'];
    } else {
        $name = "salim";
    }
    return view('pages/home', compact('name'));
    // om peut aussi renvoyer un tableau associative
})->name('app_home');

// les fonction fleché en php
Route::get('/about', fn() => view('pages/about'))->name('app_about');

// route simplifié avec laravel
Route::view('/welcome', 'pages/welcome')->name('app_welcome');


Route::get('/city', [cityController::class, 'index'])->name('app_city');


Route::get('/etudiant', [etudiantController::class, 'index'])->name('app_etudiant');
Route::get('/etudiant/create', [etudiantController::class, 'create'])->name('app_etudiant.create');