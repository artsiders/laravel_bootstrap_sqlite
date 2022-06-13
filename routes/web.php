<?php

use App\Http\Controllers\cityController;
use App\Http\Controllers\etudiantController;
use App\Http\Controllers\homeController;
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

Route::get('/', [homeController::class, 'index'])->name('app_home');

// les fonction fleché en php
Route::get('/about', fn() => view('pages/about'))->name('app_about');

// route simplifié avec laravel
Route::view('/welcome', 'pages/welcome')->name('app_welcome');


Route::get('/city', [cityController::class, 'index'])->name('app_city');


Route::get('/etudiant', [etudiantController::class, 'index'])->name('app_etudiant');
Route::get('/etudiant/create', [etudiantController::class, 'create'])->name('app_etudiant.create');

Route::post('/etudiant/create', [etudiantController::class, 'ajouter'])->name('app_etudiant.ajouter');