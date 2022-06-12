<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class etudiantController extends Controller
{
    public function index() {
        // $etudiants = Etudiant::orderBy('nom', 'asc')->get();
        $etudiants = Etudiant::orderBy('nom', 'asc')->paginate(5);
        return view('pages.etudiant', compact('etudiants'));
    }
}