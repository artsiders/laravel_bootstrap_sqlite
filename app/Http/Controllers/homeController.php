<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index() {
        // $etudiants = Etudiant::orderBy('nom', 'asc')->get();
        $etudiants = Etudiant::orderBy('nom', 'asc')->paginate(5);
        return view('pages.home', compact('etudiants'));
    }
}
