<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cityController extends Controller
{
    public function index() {
        return view('pages.city');
    }
}
