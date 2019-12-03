<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cliniqueController extends Controller
{
    public function index(){
        return view('acceuil');
    }
    public function show(){
        return view('medecin/page_medecin');
    }
}
