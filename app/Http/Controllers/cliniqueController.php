<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cliniqueController extends Controller
{
    public function index(){
        return view('acceuil');
    }
    public function medecin(){
        return view('medecin/page_medecin');
    }

    public function secretaire(){
        return view('secretaire/page_secretaire');
    }
}
