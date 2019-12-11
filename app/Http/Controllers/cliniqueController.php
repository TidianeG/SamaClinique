<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cliniqueController extends Controller
{
    public function index(){
        return view('acceuil');
    }
    public function medecin(){
        return view('medecin/medecin');
    }

    public function secretaire(){
        return view('secretaire/secretaire');
    }

    public function admin(){
        return view('admin/admin');
    }
}
